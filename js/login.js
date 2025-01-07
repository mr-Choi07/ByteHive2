document.addEventListener("DOMContentLoaded", () => {
    const btn_login = document.querySelector("#btn_login");  // 로그인 버튼

    btn_login.addEventListener("click", () => {
        const f_id = document.querySelector("#f_id");  // 아이디 입력 필드
        const f_pw = document.querySelector("#f_pw");  // 비밀번호 입력 필드

        // 아이디 입력값 확인
        if (f_id.value == '') {
            alert('아이디를 입력하세요');
            f_id.focus();  // 아이디 입력 필드로 포커스 이동
            return false;
        }

        // 비밀번호 입력값 확인
        if (f_pw.value == '') {
            alert('비밀번호를 입력하세요');
            f_pw.focus();  // 비밀번호 입력 필드로 포커스 이동
            return false;
        }

        // XMLHttpRequest 객체 생성
        const xhr = new XMLHttpRequest();

        // 요청 설정 (POST 방식, login_process.php로 요청)
        xhr.open("POST", "./pg/login_process.php", true);

        // FormData 객체 생성 (폼 데이터 전송)
        const formData = new FormData();
        formData.append("id", f_id.value);
        formData.append("pw", f_pw.value);

        // 요청 보내기
        xhr.send(formData);

        // 응답 처리
        xhr.onload = () => {
            if (xhr.status == 200) {  // 서버 응답이 200일 경우 (정상)
                console.log(xhr.responseText);  // 서버 응답 확인

                try {
                    // JSON 응답을 JavaScript 객체로 파싱
                    const data = JSON.parse(xhr.responseText);

                    if (data.result == 'login_fail') {
                        alert('해당 정보는 존재하지 않습니다.');
                        f_id.value = '';  // 아이디 초기화
                        f_pw.value = '';  // 비밀번호 초기화
                        f_id.focus();  // 아이디 입력 필드로 포커스 이동
                        return false;
                    } else if (data.result == 'login_success') {
                        alert('로그인에 성공했습니다.');
                        self.location.href = './edu2.php';  // 로그인 성공 시 다른 페이지로 이동
                    }
                } catch (e) {
                    // JSON 파싱 오류 처리
                    console.error('JSON 파싱 오류:', e);
                    alert('서버 응답이 올바르지 않습니다.');
                }
            } else {
                // 서버 응답 실패 처리
                alert("통신에 실패했습니다. 다시 시도해주세요.");
            }
        };

        // 요청 중 오류가 발생했을 때
        xhr.onerror = () => {
            alert("통신 중 오류가 발생했습니다. 다시 시도해주세요.");
        };
    });
});
