<?php
require_once "config.php";
session_start();
$ID = $_SESSION['userId'];
$project = "";
$project1 = "";
$query = "SELECT * FROM project";
$result = mysqli_query($mysqli, $query);

while($row = mysqli_fetch_assoc($result)) {
    $member = $row['projectMembers'];
    $projName = $row['projectName'];
    $arr = array();
    $arr = explode(",", $member);
    $cnt = count($arr);
    for ($i = 0; $i < $cnt; $i++) {
        if($row['isActive'] == 1 && $arr[$i] == $ID){
            $project .= "<a href=''><div class='open-project'>" . $projName ."</div></a>";
        }else if($row['isActive'] == 0 && $arr[$i] == $ID){
            $project1 .= "<a href=''><div class='close-project'>" . $projName ."</div></a>";
        }
    }
}

?>

<html>
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <title>Collabable</title>
    <link rel="stylesheet" href="dist/app.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900" rel="stylesheet">

</head>
<body>
<main>
    <div class="sidebar">
        <div class="toggle-btn">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="logo_box sidebar_title">
            COLLABABLE
        </div>
        <h4 class="member_name">
            <a href="profilesettings-member.php"><?php echo $_SESSION['userName']; ?>
                <img src="assets/images/edit_icon.png" class="edit_icon"></a>
        </h4>
        <div class="sidebar_divider"></div>
        <div class="sidebar_content">
            <ul>
                <li class="active_tab"><a href="homepage-admin.php">Home</a></li>
            </ul>
        </div>
        <a href="index.php">
            <div class="signout">
                Sign Out
            </div>
        </a>

    </div>

    <div class="main_page no-button">
        <div class="horizontal_line fixed_line"></div>

        <div class ="line_layout fixed_line">
            <div class="dot_pattern"></div>
        </div>

        <div class="project_header" style="display: flex;">
            <h2 class="module_title">Ongoing Projects</h2>
        </div>
        <div class="project_cards">
            <?php echo $project; ?>
        </div>

        <div class="project_header">
            <h2 class="module_title">Closed Projects</h2>
        </div>

        <div class="project_cards">
            <?php echo $project1; ?>
        </div>

    </div>
</main>

<script src="assets/scripts/sidebar.js"></script>

</body>
</html>