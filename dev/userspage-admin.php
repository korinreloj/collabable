<!-- <?php
session_start();
require "createProjectController.php";
?> -->

<html>
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <title>Collabable</title>
    <link rel="stylesheet" href="dist/app.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://gyrocode.github.io/jquery-datatables-checkboxes/1.2.11/css/dataTables.checkboxes.css">
    <script src="http://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://gyrocode.github.io/jquery-datatables-checkboxes/1.2.11/js/dataTables.checkboxes.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">


    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable();
        } );

    </script>
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
            <a href="profilesettings.php"><?php echo $_SESSION['userName']; ?>
                <img src="assets/images/edit_icon.png" class="edit_icon"></a>
        </h4>
        <div class="sidebar_divider"></div>
        <div class="sidebar_content">
            <ul>
                <li class=""><a href="homepage.php">Home</a></li>
                <li class="active_tab"><a href="">Users</a></li>
            </ul>
        </div>
        <a href="index.php">
            <div class="signout">
                Sign Out
            </div>
        </a>

    </div>

    <div class="main_page">
        <div class="horizontal_line fixed_line"></div>

        <div class ="line_layout fixed_line">
            <div class="dot_pattern"></div>
        </div>

        <div class="project_header users_header">
            <h2 class="module_title">Users</h2>
            <a href=""><button class="default_button page_button add-user_button" >Add New User</button></a>
        </div>

        <div class="users_content">
            <div class="wrapper">
                <ul class="tabs clearfix" data-tabgroup="first-tab-group">
                    <li>
                        <a href="#tab1-user" class="active">Active</a>
                    </li>
                    <li>
                        <a href="#tab2-user">Deactivated</a>
                    </li>
                </ul>

                <section id="first-tab-group" class="tabgroup">
                    <div id="tab1-user">
                        <table id="example" class="display" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Email</th>
                                    <th>Contact Number</th>
                                    <th>Privilege</th>
                                    <th>Update</th>
                                    <th>Deactivate</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Corinne Reloj</td>
                                    <td>corinnereloj</td>
                                    <td>dw/126^@92SJK_0</td>
                                    <td>relojcorinne@gmail.com</td>
                                    <td>09562368873</td>
                                    <td>Leader</td>
                                    <td><button class="update_user">Update</button></td>
                                    <td><button class="deactivate_user" onclick="myFunction()">Deactivate</button></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Corinne Reloj</td>
                                    <td>corinnereloj</td>
                                    <td>dw/126^@92SJK_0</td>
                                    <td>relojcorinne@gmail.com</td>
                                    <td>09562368873</td>
                                    <td>Leader</td>
                                    <td><button class="update_user">Update</button></td>
                                    <td><button class="deactivate_user">Deactivate</button></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Annyeong</td>
                                    <td>eyyy</td>
                                    <td>dw/126^@92SJK_0</td>
                                    <td>relojcorinne@gmail.com</td>
                                    <td>09562368873</td>
                                    <td>Leader</td>
                                    <td><button class="update_user">Update</button></td>
                                    <td><button class="deactivate_user">Deactivate</button></td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>

                    <div id="tab2-user">
                        <table id="example" class="display" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Email</th>
                                    <th>Contact Number</th>
                                    <th>Privilege</th>
                                    <th>Activate</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Corinne Reloj</td>
                                    <td>corinnereloj</td>
                                    <td>dw/126^@92SJK_0</td>
                                    <td>relojcorinne@gmail.com</td>
                                    <td>09562368873</td>
                                    <td>Leader</td>
                                    <td><button class="update_user">Activate</button></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Corinne Reloj</td>
                                    <td>corinnereloj</td>
                                    <td>dw/126^@92SJK_0</td>
                                    <td>rosslynch</td>
                                    <td>09562368873</td>
                                    <td>Leader</td>
                                    <td><button class="update_user">Activate</button></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Annyeong</td>
                                    <td>eyyy</td>
                                    <td>dw/126^@92SJK_0</td>
                                    <td>relojcorinne@gmail.com</td>
                                    <td>09562368873</td>
                                    <td>Leader</td>
                                    <td><button class="update_user">Activate</button></td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
        </div>

        
    </div>
</main>

<script src="assets/scripts/sidebar.js"></script>
<script src="assets/scripts/tabs.js"></script>

<script>
$(document).ready(function() {
    $('table.display').dataTable();
} );
</script>
</body>
</html>