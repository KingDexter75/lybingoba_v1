<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a href="<?= PATH ?>dashboard"
                <?php if($page == 'dashboard'){ ?> class="nav-link" <?php }else{ ?> class="nav-link collapsed" <?php } ?>
            >
                <i class="bi bi-house"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a data-bs-target="#components-nav" data-bs-toggle="collapse" href="#"
            <?php if($page == 'add_ap' || $page == 'see_ap'){ ?> class="nav-link" <?php }else{ ?> class="nav-link collapsed" <?php } ?>
            >
                <i class="bi bi-person"></i><span>AP</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" data-bs-parent="#sidebar-nav"
                <?php if($page == 'add_ap' || $page == 'see_ap'){ ?> class="nav-content" <?php }else{ ?> class="nav-content collapse" <?php } ?>
            >
                <li>
                    <a href="<?= PATH ?>see_ap"
                        <?php if($page == 'see_ap'){ ?> class="nav-link" <?php }else{ ?> class="nav-link collapsed" <?php } ?>
                    >
                        <i class="bi bi-eye" style="font-size: 20px;"></i><span>See AP</span>
                    </a>
                </li>
                <li>
                    <a href="<?= PATH ?>add_ap"
                        <?php if($page == 'add_ap'){ ?> class="nav-link" <?php }else{ ?> class="nav-link collapsed" <?php } ?>
                    >
                        <i class="bi bi-plus" style="font-size: 20px;"></i><span>Add AP</span>
                    </a>
                </li>
            </ul>
        </li><!-- End AP Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Documents</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?= PATH ?>see_document">
                        <i class="bi bi-eye" style="font-size: 20px;"></i><span>See Document</span>
                    </a>
                </li>
                <li>
                    <a href="<?= PATH ?>add_document">
                        <i class="bi bi-plus" style="font-size: 20px;"></i><span>Add Document</span>
                    </a>
                </li>
            </ul>
        </li><!-- End DOCUMENT Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-people"></i><span>Staff</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?= PATH ?>see_staff">
                        <i class="bi bi-eye" style="font-size: 20px;"></i><span>See Staff</span>
                    </a>
                </li>
                <li>
                    <a href="<?= PATH ?>add_staff">
                        <i class="bi bi-plus" style="font-size: 20px;"></i><span>Add Staff</span>
                    </a>
                </li>
            </ul>
        </li><!-- End STAFF Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-newspaper"></i><span>Examen</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?= PATH ?>see_examen">
                        <i class="bi bi-eye" style="font-size: 20px;"></i><span>See Examen</span>
                    </a>
                </li>
                <li>
                    <a href="<?= PATH ?>add_examen">
                        <i class="bi bi-plus" style="font-size: 20px;"></i><span>Add Examen</span>
                    </a>
                </li>
            </ul>
        </li><!-- End EXAMEN Nav -->

        <li class="nav-item">
            <a data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#"
            <?php if($page == 'add_blog' || $page == 'see_blog'){ ?> class="nav-link" <?php }else{ ?> class="nav-link collapsed" <?php } ?>
            >
                <i class="bi bi-chat"></i><span>Blog</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="icons-nav" data-bs-parent="#sidebar-nav"
                <?php if($page == 'add_blog' || $page == 'see_blog'){ ?> class="nav-content" <?php }else{ ?> class="nav-content collapse" <?php } ?>
            >
                <li>
                    <a href="<?= PATH ?>see_blog"
                    <?php if($page == 'see_blog'){ ?> class="nav-link" <?php }else{ ?> class="nav-link collapsed" <?php } ?>
                    >
                        <i class="bi bi-eye" style="font-size: 20px;"></i><span>See Blog</span>
                    </a>
                </li>
                <li>
                    <a href="<?= PATH ?>add_blog"
                    <?php if($page == 'add_blog'){ ?> class="nav-link" <?php }else{ ?> class="nav-link collapsed" <?php } ?>
                    >
                        <i class="bi bi-plus" style="font-size: 20px;"></i><span>Add Blog</span>
                    </a>
                </li>
            </ul>
        </li><!-- End BLOG Nav -->

        <li class="nav-item">
            <a data-bs-target="#user" data-bs-toggle="collapse" href="#"
                <?php if($page == 'add_user' || $page == 'see_user'){ ?> class="nav-link" <?php }else{ ?> class="nav-link collapsed" <?php } ?>
            >
                <i class="bi bi-person-plus"></i><span>User</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="user" data-bs-parent="#sidebar-nav"
                <?php if($page == 'add_user' || $page == 'see_user'){ ?> class="nav-content" <?php }else{ ?> class="nav-content collapse" <?php } ?>
            >
                <li>
                    <a href="<?= PATH ?>see_user"
                        <?php if($page == 'see_user'){ ?> class="nav-link" <?php }else{ ?> class="nav-link collapsed" <?php } ?>
                    >
                        <i class="bi bi-eye" style="font-size: 20px;"></i><span>See User</span>
                    </a>
                </li>
                <li>
                    <a href="<?= PATH ?>add_user"
                        <?php if($page == 'add_user'){ ?> class="nav-link" <?php }else{ ?> class="nav-link collapsed" <?php } ?>
                    >
                        <i class="bi bi-plus" style="font-size: 20px;"></i><span>Add User</span>
                    </a>
                </li>
            </ul>
        </li><!-- End USER Nav -->

        <li class="nav-heading">Pages</li>

        <li class="nav-item">
            <a href="<?= PATH ?>profile"
                <?php if($page == 'profile'){ ?> class="nav-link" <?php }else{ ?> class="nav-link collapsed" <?php } ?>
            >
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <a href="<?= PATH ?>logout" class="nav-link collapsed">
                <i class="bi bi-box-arrow-right"></i>
                <span>LogOut</span>
            </a>
        </li>

    </ul>

</aside><!-- End Sidebar-->