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


    <script type="text/javascript">
        $(document).ready(function() {
            var table = $('#example').DataTable({
                'columnDefs': [
                    {
                        'targets': 0,

                    }
                ],
                'order': [[1, 'asc']]
            });
        });

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
            <a href="profilesettings.php"><<!-- ?php echo $_SESSION['userName']; ?> -->
                <img src="assets/images/edit_icon.png" class="edit_icon"></a>
        </h4>
        <div class="sidebar_divider"></div>
        <div class="sidebar_content">
            <ul>
                <li class=""><a href="homepage.php"> Back to Home</a></li>
                <li class=""><a href="">Progress</a></li>
                <li class=""><a href="">Project Details</a></li>
                <li class=""><a href="">Task Boards</a></li>
                <li class=""><a href="">Calendar</a></li>
                <li class=""><a href="">Change Requests</a></li>
                <li class=""><a href="">Chat Room</a></li>
                <li class="active_tab"><a href="">Documents</a></li>
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

        <div class="project_header document_header">
            <h2 class="module_title">Documents</h2>
            <a href=""><button class="default_button page_button upload_button" >Upload File</button></a>
        </div>

        <div class="document_layout">
            <input type="text" name="search_document" class="search_document" placeholder="Search Documents...">

            <div class="document_container">
                
                <div class="document_card">
                    <div class="icon_container">
                        <img src="assets/images/file_icon.png">
                    </div>
                    
                    <div class="document_name">
                        Blueprint.docx
                        <img src="assets/images/download_icon.png">
                    </div>
                </div>

            </div>
        </div>

    </div>
</main>

<script src="assets/scripts/sidebar.js"></script>

</body>
</html>