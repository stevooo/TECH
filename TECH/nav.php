<?php

echo" <a href='index.php' >
            <img id='logo' src='img/logo.png' alt='TECH'  />
            </a> 
            <nav>

               

                <ul>

                    <li><a href='index.php'>Home</a></li>
                    <li><a href='#'>Categories&#9662</a>
                        <ul class='categories'>
                            <li class='submenu'><a href='popular.php'>Popular</a></li>
                            <li class='submenu'><a href='categorypage.php?category={mobileTablet}&name=Mobile/Tablet'>Mobile/Tablet</a></li>
                            <li class='submenu'><a href='categorypage.php?category={business}&name=Business'>Business</a></li>
                            <li class='submenu'><a href='categorypage.php?category={hardware}&name=Hardware'>Hardware</a></li>
                            <li class='submenu'><a href='categorypage.php?category={software}&name=Software'>Software</a></li>
                            <li class='submenu'><a href='categorypage.php?category={wearables}&name=Wearables'>Wearables</a></li>
                            <li class='submenu'><a href='categorypage.php?category={tvs}&name=TV'>TV</a></li>
                            <li class='submenu'><a href='categorypage.php?category={gaming}&name=Gaming'>Gaming</a></li>
                            <li class='submenu'><a href='recent.php'>Recent</a></li>
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
                        echo "<li class='submenu'><a href='logout.php?'>Logout</a></li>
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