<form action="insert.php" method="post">
    <h2>회원가입</h2>
    <hr>

    <label for="id">아이디</label>
    <input type="text" name="id" id="id"><br />

    <label for="pw">비밀번호</label>
    <input type="password" name="pw" id="pw"><br />
   
    <label for="pwc">비밀번호 확인</label> <!-- front -->
    <input type="password" name="pwc" id="pwc"><br />
   
    <label for="username">이름</label>
    <input type="text" name="name" id="username"><br />

    <label for="w">성별</label>
    <input type="radio" value="2" name="sex" id="w">
    <label for="w">여성</label>
    <input type="radio" value="1" name="sex" id="m">
    <label for="m">남성</label>

    <label for="birth">생년월일</label>
    <input type="date" name="birth" id="birth"><br />

    <input type="checkbox" value="1" name="agree" id="a">
    <label for="a">이용약관 및 개인정보수집 및 이용, 정보 수신에 동의합니다.</label><br />
    
    <input type="submit" value="회원가입">
</form>