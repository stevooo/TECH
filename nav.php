<?php

echo" <a href='index.php' >
            <img id='logo' src='img/logo.png' alt='TECH'  />
            </a> 
            <nav>

               

                <ul>

                    <li><a href='index.php'>Home</a></li>
                    <li><a href='#'>Categories&#9662</a>
                        <ul class='categories'>
                            <li class='submenu'><a href='popular.php?category=popular'>Popular</a></li>
                            <li class='submenu'><a href='mobile-tablet.php?category=mobileTablet'>Mobile/Tablet</a></li>
                            <li class='submenu'><a href='business.php?category=business'>Business</a></li>
                            <li class='submenu'><a href='hardware.php?category=hardware'>Hardware</a></li>
                            <li class='submenu'><a href='software.php?category=software'>Software</a></li>
                            <li class='submenu'><a href='wearables.php?category=wearables'>Wearables</a></li>
                            <li class='submenu'><a href='tvs.php?category=tvs'>TVs</a></li>
                            <li class='submenu'><a href='gaming.php?category=gaming'>Gaming</a></li>
                            <li class='submenu'><a href='socialmedia.php?category=socialMedia'>Social Media</a></li>
                        </ul>           
                    </li>
                    <li><a href='about.php'>About</a></li>

                    ";
                    if (isset($_SESSION['email'])) {
                        echo "<li><a  href='#'>Hi ", $_SESSION['firstname'], "&#9662";
                    } else {
                        echo "<li><a  href='#'>Login&#9662";
                    }
                    echo"</a>
                                            <ul class='account'>";
                    if (isset($_SESSION['email'])) {
                        echo "<li class='submenu'><a href='logout.php'>Logout</a></li>
                              <li class='submenu'><a href='manageaccount.php'>Manage Account</a></li>";
                    } else {
                        echo "<li class='submenu'><a href='login.php'>Login</a></li>
                                                    <li class='submenu'><a href='signup.php'>Sign-Up</a></li>";
                    }
                    echo "
                            
                        </ul>
                    </li>
                </ul>

            </nav>";
?>