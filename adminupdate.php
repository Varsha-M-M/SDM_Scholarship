<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <form action="redirect_adminUpdate.php" method="post">
    <label id="l1">Choose a Scholarship:</label>
    <select name="scholar" id="scholar">
        <option value="fee_concession_for_disabels">Fee Concession for Disabels</option>
        <option value="fee_concession_for_others">Fee Concession for others</option>
        <option value="food_and_accomodation_cat1">Food and Accomodation cat1</option>
        <option value="food_and_accomodation_obc">Food and Accomodation OBC</option>
        <option value="post_matric_disable">Post Matric Disable</option>
        <option value="post_matric_for_minority">Post Matric for Minority</option>
        <option value="post_matric_labour">Post Matric Labour</option>
        <option value="post_matric_sc">Post Matric SC</option>
        <option value="post_matric_st">Post Martic ST</option>
        <option value="saksham_disable">Sakham Disable</option>
        <option value="sdme_trust">SDME Trust</option>
        <option value="skdrdp">SKDRDP</option>
        <option value="top_class_scheme_sc">Top Class Scheme SC</option>
     </select>
      <br>
      <!-- <label id="l1">enter USN</label>
      <input type="text" > -->
      <br>
      <input type="submit" id="submitButton">
      </form>
</body>
</html>
<style>

    body {
    margin: 0;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #333;
    background: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url("https://cache.careers360.mobi/media/presets/720X480/colleges/social-media/media-gallery/3332/2018/8/9/SDM-College-of-Engineering-and-Technology-Dharwad-7.jpg");
    background-size: cover;
}

ul {
    padding: 0;
    list-style-type: none;
}
input[type],select{
    min-width: 2%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    font-size: 15px;
}
li {
    font-size: 25px;
    width: 20em;
    height: 2em;
    color: rgb(255, 255, 255);
    border-left: 0.08em solid;
    position: relative;
    margin-top: 0.8em;
}

li label{
    position: relative;
    height: 120%;
    top: -10%;
    box-sizing: border-box;
    border: 0.08em solid;
    background-color: hsl(0, 0%, 20%,0.9);
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: sans-serif;
    text-transform: capitalize;
    transform: translateX(calc(-0.15em * 3 - 0.08em * 2));
}
#l1 {
    color: aliceblue;
}
.submitButton{
    padding-left: 50px;
}
</style>