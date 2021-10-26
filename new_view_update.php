<!DOCTYPE html>
<html>
<head>
	<title>UPDATE</title>
	<link rel="stylesheet" href="CSS/style.css"> 
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>   
    <div class="sidebar">
       <div class="logo_content">
           <div class="logo">
            <i class='bx bxl-c-plus-plus'></i>
             <div class="logo_name">Tec-Line</div>
               <i class='bx bx-menu' id="btn" ></i>            
           </div>
           <ul class="nav_list">
               <li>
                   <i class='bx bx-search' ></i>
                   <input type="text" placeholder="Search">
                 <span class="tooltip">Search</span> 
               </li>
                              <li>
                 <a href="#">
                   <i class='bx bx-grid-alt'></i>
                   <span class="links_name">Dashboard</span>
                 </a>
                 <span class="tooltip">Dashboard</span> 
               </li>
                              <li>
                 <a href="#">
                   <i class='bx bx-user' ></i>
                   <span class="links_name">User</span>
                 </a>
                 <span class="tooltip">User</span> 
               </li>
                              <li>
                 <a href="#">
                   <i class='bx bx-chat' ></i>
                   <span class="links_name">Messages</span>
                 </a>
                <span class="tooltip">Messages </span> 
               </li>
                              <li>
                 <a href="#">
                   <i class='bx bx-pie-chart-alt-2' ></i>
                   <span class="links_name">Analytics</span>
                 </a>
                 <span class="tooltip">Analytics</span> 
               </li>
                              <li>
                 <a href="#">
                   <i class='bx bx-folder' ></i>
                   <span class="links_name">File Manager</span>
                 </a>
                 <span class="tooltip">Files</span> 
               </li>
                              <li>
                 <a href="#">
                   <i class='bx bx-cart-alt' ></i>
                   <span class="links_name">Order</span>
                 </a>
                 <span class="tooltip">Order</span> 
               </li>
                              <li>
                 <a href="#">
                   <i class='bx bx-heart' ></i>
                   <span class="links_name">Saved</span>
                 </a>
              <span class="tooltip">Saved</span> 
               </li>
                              <li>
                 <a href="#">
                  <i class='bx bx-cog' ></i>
                   <span class="links_name">Settings</span>
                 </a>
             <span class="tooltip">Settings</span> 
               </li>
           </ul>   
           <div class="porfile_content">
             <div class="porfile">
               <div class="porfile_details">
               <!--  <img src="porfile.jpg" alt=""> -->
               <div class="name_job">
                 <div class="name">Abel</div>
                 <div class="job">Full Stack Developer</div>
               </div>
               </div>
               <i class='bx bx-log-out' id="log_out"></i>
             </div>
           </div>  
       </div>   
    </div>
    <div class="home_content">
      <div class="text">Home Content</div>
    </div>
    <script type="text/javascript">
      let btn = document.querySelector("#btn");
      let sidebar=document.querySelector(".sidebar");
      let searchBtn = document.querySelector("bx-search");

      btn.onclick=function(){
        sidebar.classList.toggle("active");
      }
      searchBtn.onclick=function(){
        sidebar.classList.toggle("active");
      }
    </script>
</body>
</html>