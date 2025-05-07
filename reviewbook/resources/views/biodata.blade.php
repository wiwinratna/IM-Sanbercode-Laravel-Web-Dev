<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h4>Sign Up Form</h4>
    <form action="{{ route('submit.form') }}" method="POST">
    @csrf
        <label for="fname">First name:</label><br> <br>
        <input type="text" id="fname" name="fname"><br> <br>

        <label for="lname">Last name:</label><br> <br>
        <input type="text" id="lname" name="lname"><br> <br>

        <label>Gender:</label><br><br>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label><br>
            <input type="radio" id="other_gender" name="gender" value="other">
            <label for="other_gender">Other</label><br><br>

        <label for="nationality">Nationality:</label><br><br>
        <select id="nationality" name="nationality">
            <option value="indonesian">Indonesian</option>
            <option value="malaysian">Malaysian</option>
            <option value="singaporean">Singaporean</option>
            <option value="other">Other</option>
        </select><br><br>

        <label>Language Spoken:</label><br><br>
            <input type="checkbox" id="lang_bahasa" name="language" value="Bahasa Indonesia">
            <label for="lang_bahasa">Bahasa Indonesia</label><br>
            <input type="checkbox" id="lang_english" name="language" value="English">
            <label for="lang_english">English</label><br>
            <input type="checkbox" id="lang_other" name="language" value="Other">
            <label for="lang_other">Other</label><br><br>

        <label for="bio">Bio:</label><br><br>
        <textarea id="bio" name="bio" rows="5" cols="30"></textarea><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>