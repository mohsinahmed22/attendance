<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">Etoolmarts Attendance Administration</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        <li class="hide"><p style="color:#999; padding:13px; font-weight: 600"><?php echo $_SESSION['id'];?></p></li>
        <li><p style="color:#999; padding:13px; font-weight: 600">Welcome <?php echo $_SESSION['employee_name'];?></p></li>
        <li>
            <a href="logout.php" >Logout</a>

        </li>


    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li>
                <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
            </li>
            <li>
                <a href="employees.php"><i class="fa fa-users"></i> Employees</a>
            </li>
           <li>
                <a href="attendance.php"><i class="fa fa-fw fa-table"></i> Attendance</a>
            </li>
            <!--  <li>
                 <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a>
             </li>
             <li>
                 <a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
             </li>
             <li>
                 <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
             </li>
             <li>
                 <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                 <ul id="demo" class="collapse">
                     <li>
                         <a href="#">Dropdown Item</a>
                     </li>
                     <li>
                         <a href="#">Dropdown Item</a>
                     </li>
                 </ul>
             </li>
             <li class="active">
                 <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
             </li>
             <li>
                 <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
             </li>-->
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>