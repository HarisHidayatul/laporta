@include('navbar_admin.css')
<div>
    <div class="row">
        <!-- Tombol Toggler untuk Menu di Layar Kecil -->
        <div class="col-2 d-md-none">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarCollapse"
                aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <!-- Sidebar -->
        <nav class="d-none d-md-block bg-light sidebar left_navbar">
            <div class="position-sticky">
                <div class="arrow_navbar_top" onclick="toggleNavbar()">
                    <svg width="8" height="16" viewBox="0 0 8 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L7 8L1 15" stroke="#313131" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </div>
                <ul class="nav flex-column">
                    <div style="content: ''; height: 50px;"></div>
                    <li class="nav-item nav_item">
                        <a class="d-flex justify-content-start nav-link" href="#">
                            <div>
                                <div class="box_navbar">
                                    <svg width="20" height="24" viewBox="0 0 20 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17.68 0.48H2.31999C1.26399 0.48 0.399994 1.344 0.399994 2.4V21.6C0.399994 22.656 1.26399 23.52 2.31999 23.52H17.68C18.736 23.52 19.6 22.656 19.6 21.6V2.4C19.6 1.344 18.736 0.48 17.68 0.48ZM6.15999 19.68C6.15999 20.208 5.72799 20.64 5.19999 20.64H3.27999C2.75199 20.64 2.31999 20.208 2.31999 19.68V19.2C2.31999 18.672 2.75199 18.24 3.27999 18.24H5.19999C5.72799 18.24 6.15999 18.672 6.15999 19.2V19.68ZM6.15999 15.84C6.15999 16.368 5.72799 16.8 5.19999 16.8H3.27999C2.75199 16.8 2.31999 16.368 2.31999 15.84V15.36C2.31999 14.832 2.75199 14.4 3.27999 14.4H5.19999C5.72799 14.4 6.15999 14.832 6.15999 15.36V15.84ZM6.15999 12C6.15999 12.528 5.72799 12.96 5.19999 12.96H3.27999C2.75199 12.96 2.31999 12.528 2.31999 12V11.52C2.31999 10.992 2.75199 10.56 3.27999 10.56H5.19999C5.72799 10.56 6.15999 10.992 6.15999 11.52V12ZM11.92 19.68C11.92 20.208 11.488 20.64 10.96 20.64H9.03999C8.51199 20.64 8.07999 20.208 8.07999 19.68V19.2C8.07999 18.672 8.51199 18.24 9.03999 18.24H10.96C11.488 18.24 11.92 18.672 11.92 19.2V19.68ZM11.92 15.84C11.92 16.368 11.488 16.8 10.96 16.8H9.03999C8.51199 16.8 8.07999 16.368 8.07999 15.84V15.36C8.07999 14.832 8.51199 14.4 9.03999 14.4H10.96C11.488 14.4 11.92 14.832 11.92 15.36V15.84ZM11.92 12C11.92 12.528 11.488 12.96 10.96 12.96H9.03999C8.51199 12.96 8.07999 12.528 8.07999 12V11.52C8.07999 10.992 8.51199 10.56 9.03999 10.56H10.96C11.488 10.56 11.92 10.992 11.92 11.52V12ZM17.68 19.68C17.68 20.208 17.248 20.64 16.72 20.64H14.8C14.272 20.64 13.84 20.208 13.84 19.68V19.2C13.84 18.672 14.272 18.24 14.8 18.24H16.72C17.248 18.24 17.68 18.672 17.68 19.2V19.68ZM17.68 15.84C17.68 16.368 17.248 16.8 16.72 16.8H14.8C14.272 16.8 13.84 16.368 13.84 15.84V15.36C13.84 14.832 14.272 14.4 14.8 14.4H16.72C17.248 14.4 17.68 14.832 17.68 15.36V15.84ZM17.68 12C17.68 12.528 17.248 12.96 16.72 12.96H14.8C14.272 12.96 13.84 12.528 13.84 12V11.52C13.84 10.992 14.272 10.56 14.8 10.56H16.72C17.248 10.56 17.68 10.992 17.68 11.52V12ZM17.68 7.68C17.68 8.208 17.248 8.64 16.72 8.64H3.27999C2.75199 8.64 2.31999 8.208 2.31999 7.68V3.84C2.31999 3.312 2.75199 2.88 3.27999 2.88H16.72C17.248 2.88 17.68 3.312 17.68 3.84V7.68Z"
                                            fill="#9C9C9C" />
                                    </svg>
                                </div>
                            </div>
                            <div style="content: ''; width: 10px;"></div>
                            <div class="text_navbar" style="font-size: 20px; margin-top: -3px"> Accounting </div>
                        </a>
                    </li>
                    <div style="content: ''; height: 20px;"></div>
                    <li class="nav-item nav_item active">
                        <a class="d-flex justify-content-start align-items-center nav-link" href="#">
                            <div>
                                <div class="box_navbar">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1 2C1 1.73478 1.10536 1.48043 1.29289 1.29289C1.48043 1.10536 1.73478 1 2 1H6C6.26522 1 6.51957 1.10536 6.70711 1.29289C6.89464 1.48043 7 1.73478 7 2V7C7 7.26522 6.89464 7.51957 6.70711 7.70711C6.51957 7.89464 6.26522 8 6 8H2C1.73478 8 1.48043 7.89464 1.29289 7.70711C1.10536 7.51957 1 7.26522 1 7V2ZM11 2C11 1.73478 11.1054 1.48043 11.2929 1.29289C11.4804 1.10536 11.7348 1 12 1H16C16.2652 1 16.5196 1.10536 16.7071 1.29289C16.8946 1.48043 17 1.73478 17 2V4C17 4.26522 16.8946 4.51957 16.7071 4.70711C16.5196 4.89464 16.2652 5 16 5H12C11.7348 5 11.4804 4.89464 11.2929 4.70711C11.1054 4.51957 11 4.26522 11 4V2ZM1 13C1 12.7348 1.10536 12.4804 1.29289 12.2929C1.48043 12.1054 1.73478 12 2 12H6C6.26522 12 6.51957 12.1054 6.70711 12.2929C6.89464 12.4804 7 12.7348 7 13V16C7 16.2652 6.89464 16.5196 6.70711 16.7071C6.51957 16.8946 6.26522 17 6 17H2C1.73478 17 1.48043 16.8946 1.29289 16.7071C1.10536 16.5196 1 16.2652 1 16V13ZM11 10C11 9.73478 11.1054 9.48043 11.2929 9.29289C11.4804 9.10536 11.7348 9 12 9H16C16.2652 9 16.5196 9.10536 16.7071 9.29289C16.8946 9.48043 17 9.73478 17 10V16C17 16.2652 16.8946 16.5196 16.7071 16.7071C16.5196 16.8946 16.2652 17 16 17H12C11.7348 17 11.4804 16.8946 11.2929 16.7071C11.1054 16.5196 11 16.2652 11 16V10Z"
                                            stroke="#9C9C9C" stroke-width="2" />
                                    </svg>
                                </div>
                            </div>
                            <div style="content: ''; width: 10px;"></div>
                            <div class="text_navbar"> Dashboard </div>
                        </a>
                    </li>
                    <li class="nav-item nav_item">
                        <div class="d-flex justify-content-between">
                            <a class="d-flex justify-content-start align-items-center nav-link" href="#">
                                <div>
                                    <div class="box_navbar">
                                        <svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M1.5 0.5H22.5C23.3297 0.5 24 1.17031 24 2V3.5C24 4.32969 23.3297 5 22.5 5H1.5C0.670312 5 0 4.32969 0 3.5V2C0 1.17031 0.670312 0.5 1.5 0.5ZM1.5 6.5H22.5V18.5C22.5 20.1547 21.1547 21.5 19.5 21.5H4.5C2.84531 21.5 1.5 20.1547 1.5 18.5V6.5ZM7.5 10.25C7.5 10.6625 7.8375 11 8.25 11H15.75C16.1625 11 16.5 10.6625 16.5 10.25C16.5 9.8375 16.1625 9.5 15.75 9.5H8.25C7.8375 9.5 7.5 9.8375 7.5 10.25Z"
                                                fill="#9C9C9C" />
                                        </svg>
                                    </div>
                                </div>
                                <div style="content: ''; width: 10px;"></div>
                                <div class="text_navbar"> Master </div>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item nav_item" onclick="nav_item_click(0);">
                        <div class="d-flex justify-content-between">
                            <a class="d-flex justify-content-start align-items-center nav-link" href="#">
                                <div>
                                    <div class="box_navbar">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.8"
                                                d="M12.9 2.518L12.87 2.588L9.97 9.318H7.12C6.44 9.318 5.8 9.448 5.2 9.708L6.95 5.528L6.99 5.438L7.05 5.278C7.08 5.208 7.1 5.148 7.13 5.098C8.44 2.068 9.92 1.378 12.9 2.518Z"
                                                fill="#969BA0" />
                                            <path
                                                d="M18.289 9.52C17.839 9.39 17.369 9.32 16.879 9.32H9.96899L12.869 2.59L12.899 2.52C13.039 2.57 13.189 2.64 13.339 2.69L15.549 3.62C16.779 4.13 17.639 4.66 18.169 5.3C18.259 5.42 18.339 5.53 18.419 5.66C18.509 5.8 18.579 5.94 18.619 6.09C18.659 6.18 18.689 6.26 18.709 6.35C18.969 7.2 18.809 8.23 18.289 9.52Z"
                                                fill="#969BA0" />
                                            <path opacity="0.4"
                                                d="M21.758 14.2V16.15C21.758 16.35 21.748 16.55 21.738 16.74C21.548 20.24 19.598 22 15.898 22H8.09801C7.84801 22 7.61801 21.98 7.38801 21.95C4.20801 21.74 2.50801 20.04 2.28801 16.86C2.25801 16.62 2.23801 16.39 2.23801 16.15V14.2C2.23801 12.19 3.45801 10.46 5.19801 9.71001C5.79801 9.45001 6.43801 9.32001 7.11801 9.32001H16.878C17.368 9.32001 17.838 9.39001 18.288 9.52001C19.2911 9.82606 20.1695 10.4459 20.7941 11.2883C21.4187 12.1307 21.7566 13.1513 21.758 14.2Z"
                                                fill="#969BA0" />
                                            <path opacity="0.6"
                                                d="M6.94801 5.53101L5.19801 9.71101C4.32012 10.0887 3.57201 10.7151 3.046 11.513C2.52 12.3109 2.23911 13.2453 2.23801 14.201V11.271C2.23801 8.43101 4.25801 6.06101 6.94801 5.53101ZM21.76 11.27V14.2C21.7586 13.1513 21.4207 12.1307 20.7961 11.2883C20.1715 10.4459 19.2931 9.82606 18.29 9.52001C18.81 8.23001 18.97 7.20001 18.71 6.35001C18.69 6.26001 18.66 6.18001 18.62 6.09001C19.567 6.58377 20.3605 7.32777 20.9141 8.24107C21.4677 9.15438 21.7603 10.202 21.76 11.27Z"
                                                fill="#969BA0" />
                                        </svg>
                                    </div>
                                </div>
                                <div style="content: ''; width: 10px;"></div>
                                <div class="text_navbar"> Petty Cash </div>
                            </a>
                            <div class="arrow_navbar" name="arrow_navbar">
                                <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.1875 1.375L6.8125 7L1.1875 12.625" stroke="#969BA0" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>
                    </li>
                    <div class="sub_navbar" name="sub_navbar">
                        <li class="nav-item nav_item">
                            <div class="d-flex justify-content-start">
                                <a class="d-flex justify-content-start align-items-center nav-link" href="#">
                                    <div style="content: ''; width: 35px;"></div>
                                    <div class="text_sub_navbar"> Saldo Petty Cash </div>
                                    <div style="content: ''; width: 35px;"></div>
                                    <div class="text_sub_navbar">5</div>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item nav_item">
                            <div class="d-flex justify-content-start">
                                <a class="d-flex justify-content-start align-items-center nav-link" href="#">
                                    <div style="content: ''; width: 35px;"></div>
                                    <div class="text_sub_navbar"> Revisi Petty Cash </div>
                                    <div style="content: ''; width: 35px;"></div>
                                    <div class="text_sub_navbar">5</div>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item nav_item">
                            <div class="d-flex justify-content-start">
                                <a class="d-flex justify-content-start align-items-center nav-link" href="#">
                                    <div style="content: ''; width: 35px;"></div>
                                    <div class="text_sub_navbar"> Detail Petty Cash </div>
                                    <div style="content: ''; width: 35px;"></div>
                                    <div class="text_sub_navbar">5</div>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item nav_item">
                            <div class="d-flex justify-content-start">
                                <a class="d-flex justify-content-start align-items-center nav-link" href="#">
                                    <div style="content: ''; width: 35px;"></div>
                                    <div class="text_sub_navbar"> Set Item </div>
                                    <div style="content: ''; width: 35px;"></div>
                                    <div class="text_sub_navbar">5</div>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item nav_item">
                            <div class="d-flex justify-content-start">
                                <a class="d-flex justify-content-start align-items-center nav-link" href="#">
                                    <div style="content: ''; width: 35px;"></div>
                                    <div class="text_sub_navbar"> Sinkronisasi Robot </div>
                                    <div style="content: ''; width: 35px;"></div>
                                    <div class="text_sub_navbar">5</div>
                                </a>
                            </div>
                        </li>
                    </div>
                    <li class="nav-item nav_item" onclick="nav_item_click(1);">
                        <div class="d-flex justify-content-between">
                            <a class="d-flex justify-content-start align-items-center nav-link" href="#">
                                <div>
                                    <div class="box_navbar">
                                        <svg width="22" height="16" viewBox="0 0 22 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M3.932 0.285721C3.07952 0.285721 2.26195 0.624368 1.65915 1.22716C1.05636 1.82996 0.717712 2.64753 0.717712 3.50001V4.14286H21.2857V3.50001C21.2857 2.64753 20.9471 1.82996 20.3443 1.22716C19.7415 0.624368 18.9239 0.285721 18.0714 0.285721H3.932ZM0.717712 12.5V5.42858H21.2857V12.5C21.2857 13.3525 20.9471 14.1701 20.3443 14.7729C19.7415 15.3756 18.9239 15.7143 18.0714 15.7143H3.93286C3.08037 15.7143 2.26281 15.3756 1.66001 14.7729C1.05722 14.1701 0.71857 13.3525 0.71857 12.5H0.717712ZM14.6429 10.1429C14.4724 10.1429 14.3088 10.2106 14.1883 10.3312C14.0677 10.4517 14 10.6152 14 10.7857C14 10.9562 14.0677 11.1197 14.1883 11.2403C14.3088 11.3608 14.4724 11.4286 14.6429 11.4286H17.6429C17.8134 11.4286 17.9769 11.3608 18.0974 11.2403C18.218 11.1197 18.2857 10.9562 18.2857 10.7857C18.2857 10.6152 18.218 10.4517 18.0974 10.3312C17.9769 10.2106 17.8134 10.1429 17.6429 10.1429H14.6429Z"
                                                fill="#969BA0" />
                                        </svg>
                                    </div>
                                </div>
                                <div style="content: ''; width: 10px;"></div>
                                <div class="text_navbar"> Reimburse </div>
                            </a>
                            <div class="arrow_navbar" name="arrow_navbar">
                                <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.1875 1.375L6.8125 7L1.1875 12.625" stroke="#969BA0" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>

                        </div>
                    </li>
                    <div class="sub_navbar" name="sub_navbar">
                        <li class="nav-item nav_item">
                            <div class="d-flex justify-content-start">
                                <a class="d-flex justify-content-start align-items-center nav-link" href="#">
                                    <div style="content: ''; width: 35px;"></div>
                                    <div class="text_sub_navbar"> Detail reimburse </div>
                                    <div style="content: ''; width: 35px;"></div>
                                    <div class="text_sub_navbar">5</div>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item nav_item">
                            <div class="d-flex justify-content-start">
                                <a class="d-flex justify-content-start align-items-center nav-link" href="#">
                                    <div style="content: ''; width: 35px;"></div>
                                    <div class="text_sub_navbar"> Sinkronisasi robot </div>
                                    <div style="content: ''; width: 35px;"></div>
                                    <div class="text_sub_navbar">5</div>
                                </a>
                            </div>
                        </li>
                    </div>
                    <li class="nav-item nav_item" onclick="nav_item_click(2);">
                        <div class="d-flex justify-content-between">
                            <a class="d-flex justify-content-start align-items-center nav-link" href="#">
                                <div>
                                    <div class="box_navbar">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.4"
                                                d="M16.19 2H7.81C4.17 2 2 4.17 2 7.81V16.18C2 19.83 4.17 22 7.81 22H16.18C19.82 22 21.99 19.83 21.99 16.19V7.81C22 4.17 19.83 2 16.19 2Z"
                                                fill="#969BA0" />
                                            <path
                                                d="M16.83 9.41001C16.7583 9.23827 16.6217 9.10172 16.45 9.03001C16.367 8.99808 16.2789 8.98115 16.19 8.98001H14.33C13.94 8.98001 13.63 9.29001 13.63 9.68001C13.63 10.07 13.94 10.38 14.33 10.38H14.51L12.4 12.49L11.38 10.97C11.3225 10.8845 11.2471 10.8125 11.1591 10.759C11.071 10.7055 10.9724 10.6717 10.87 10.66C10.7676 10.6485 10.6639 10.6605 10.5668 10.6951C10.4698 10.7298 10.3819 10.7862 10.31 10.86L7.33 13.84C7.06 14.11 7.06 14.55 7.33 14.83C7.47 14.97 7.64 15.03 7.82 15.03C8 15.03 8.18 14.96 8.31 14.83L10.69 12.45L11.71 13.97C11.83 14.14 12.01 14.26 12.22 14.28C12.44 14.3 12.63 14.23 12.78 14.08L15.5 11.36V11.54C15.5 11.93 15.81 12.24 16.2 12.24C16.59 12.24 16.9 11.93 16.9 11.54V9.67001C16.88 9.58001 16.87 9.49001 16.83 9.41001Z"
                                                fill="#969BA0" />
                                        </svg>
                                    </div>
                                </div>
                                <div style="content: ''; width: 10px;"></div>
                                <div class="text_navbar"> Sales </div>
                            </a>
                            <div class="arrow_navbar" name="arrow_navbar">
                                <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.1875 1.375L6.8125 7L1.1875 12.625" stroke="#969BA0" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>

                        </div>
                    </li>
                    <div class="sub_navbar" name="sub_navbar">
                        <li class="nav-item nav_item">
                            <div class="d-flex justify-content-start">
                                <a class="d-flex justify-content-start align-items-center nav-link" href="#">
                                    <div style="content: ''; width: 35px;"></div>
                                    <div class="text_sub_navbar"> Revisi sales </div>
                                    <div style="content: ''; width: 35px;"></div>
                                    <div class="text_sub_navbar">5</div>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item nav_item">
                            <div class="d-flex justify-content-start">
                                <a class="d-flex justify-content-start align-items-center nav-link" href="#">
                                    <div style="content: ''; width: 35px;"></div>
                                    <div class="text_sub_navbar"> Laporan Sales </div>
                                    <div style="content: ''; width: 35px;"></div>
                                    <div class="text_sub_navbar">5</div>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item nav_item">
                            <div class="d-flex justify-content-start">
                                <a class="d-flex justify-content-start align-items-center nav-link" href="#">
                                    <div style="content: ''; width: 35px;"></div>
                                    <div class="text_sub_navbar"> Status Input </div>
                                    <div style="content: ''; width: 35px;"></div>
                                    <div class="text_sub_navbar">5</div>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item nav_item">
                            <div class="d-flex justify-content-start">
                                <a class="d-flex justify-content-start align-items-center nav-link" href="#">
                                    <div style="content: ''; width: 35px;"></div>
                                    <div class="text_sub_navbar"> Verifikasi sales </div>
                                    <div style="content: ''; width: 35px;"></div>
                                    <div class="text_sub_navbar">5</div>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item nav_item">
                            <div class="d-flex justify-content-start">
                                <a class="d-flex justify-content-start align-items-center nav-link" href="#">
                                    <div style="content: ''; width: 35px;"></div>
                                    <div class="text_sub_navbar"> Set item </div>
                                    <div style="content: ''; width: 35px;"></div>
                                    <div class="text_sub_navbar">5</div>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item nav_item">
                            <div class="d-flex justify-content-start">
                                <a class="d-flex justify-content-start align-items-center nav-link" href="#">
                                    <div style="content: ''; width: 35px;"></div>
                                    <div class="text_sub_navbar"> Setoran tunai </div>
                                    <div style="content: ''; width: 35px;"></div>
                                    <div class="text_sub_navbar">5</div>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item nav_item">
                            <div class="d-flex justify-content-start">
                                <a class="d-flex justify-content-start align-items-center nav-link" href="#">
                                    <div style="content: ''; width: 35px;"></div>
                                    <div class="text_sub_navbar"> Sinkronisasi robot </div>
                                    <div style="content: ''; width: 35px;"></div>
                                    <div class="text_sub_navbar">5</div>
                                </a>
                            </div>
                        </li>
                    </div>
                    <li class="nav-item nav_item" onclick="nav_item_click(3);">
                        <div class="d-flex justify-content-between">
                            <a class="d-flex justify-content-start align-items-center nav-link" href="#">
                                <div>
                                    <div class="box_navbar">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.4"
                                                d="M21.37 11.39V17.38C21.37 20.14 19.13 22.38 16.37 22.38H7.63C4.87 22.38 2.63 20.14 2.63 17.38V11.46C3.39 12.28 4.47 12.75 5.64 12.75C6.9 12.75 8.11 12.12 8.87 11.11C9.21703 11.6193 9.6841 12.0353 10.23 12.3213C10.7759 12.6073 11.3838 12.7545 12 12.75C13.28 12.75 14.42 12.15 15.11 11.15C15.88 12.14 17.07 12.75 18.31 12.75C19.52 12.75 20.62 12.26 21.37 11.39Z"
                                                fill="#969BA0" />
                                            <path
                                                d="M14.99 1.25H8.99L8.25 8.61C8.19 9.29 8.29 9.93 8.54 10.51C9.12 11.87 10.48 12.75 12 12.75C13.54 12.75 14.87 11.89 15.47 10.52C15.65 10.09 15.76 9.59 15.77 9.08V8.89L14.99 1.25Z"
                                                fill="#969BA0" />
                                            <path opacity="0.6"
                                                d="M22.36 8.27L22.07 5.5C21.65 2.48 20.28 1.25 17.35 1.25H13.51L14.25 8.75C14.26 8.85 14.27 8.96 14.27 9.15C14.33 9.67 14.49 10.15 14.73 10.58C15.45 11.9 16.85 12.75 18.31 12.75C19.64 12.75 20.84 12.16 21.59 11.12C22.19 10.32 22.46 9.31 22.36 8.27ZM6.59 1.25C3.65 1.25 2.29 2.48 1.86 5.53L1.59 8.28C1.49 9.35 1.78 10.39 2.41 11.2C3.17 12.19 4.34 12.75 5.64 12.75C7.1 12.75 8.5 11.9 9.21 10.6C9.47 10.15 9.64 9.63 9.69 9.09L10.47 1.26H6.59V1.25Z"
                                                fill="#969BA0" />
                                            <path
                                                d="M11.35 16.66C10.7361 16.7256 10.1683 17.0164 9.75638 17.4764C9.34448 17.9363 9.11774 18.5326 9.12 19.15V22.38H14.87V19.5C14.88 17.41 13.65 16.42 11.35 16.66Z"
                                                fill="#969BA0" />
                                        </svg>
                                    </div>
                                </div>
                                <div style="content: ''; width: 10px;"></div>
                                <div class="text_navbar"> SO Bulanan </div>
                            </a>
                            <div class="arrow_navbar" name="arrow_navbar">
                                <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.1875 1.375L6.8125 7L1.1875 12.625" stroke="#969BA0" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>

                        </div>
                    </li>
                    <div class="sub_navbar" name="sub_navbar">
                        <li class="nav-item nav_item">
                            <div class="d-flex justify-content-start">
                                <a class="d-flex justify-content-start align-items-center nav-link" href="#">
                                    <div style="content: ''; width: 35px;"></div>
                                    <div class="text_sub_navbar"> Stock opname </div>
                                    <div style="content: ''; width: 35px;"></div>
                                    <div class="text_sub_navbar">5</div>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item nav_item">
                            <div class="d-flex justify-content-start">
                                <a class="d-flex justify-content-start align-items-center nav-link" href="#">
                                    <div style="content: ''; width: 35px;"></div>
                                    <div class="text_sub_navbar"> Revisi SO </div>
                                    <div style="content: ''; width: 35px;"></div>
                                    <div class="text_sub_navbar">5</div>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item nav_item">
                            <div class="d-flex justify-content-start">
                                <a class="d-flex justify-content-start align-items-center nav-link" href="#">
                                    <div style="content: ''; width: 35px;"></div>
                                    <div class="text_sub_navbar"> Set item </div>
                                    <div style="content: ''; width: 35px;"></div>
                                    <div class="text_sub_navbar">5</div>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item nav_item">
                            <div class="d-flex justify-content-start">
                                <a class="d-flex justify-content-start align-items-center nav-link" href="#">
                                    <div style="content: ''; width: 35px;"></div>
                                    <div class="text_sub_navbar"> Sinkronisasi robot </div>
                                    <div style="content: ''; width: 35px;"></div>
                                    <div class="text_sub_navbar">5</div>
                                </a>
                            </div>
                        </li>
                    </div>
                    <li class="nav-item nav_item" onclick="nav_item_click(4);">
                        <div class="d-flex justify-content-between">
                            <a class="d-flex justify-content-start align-items-center nav-link" href="#">
                                <div>
                                    <div class="box_navbar">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M21.07 5.23C19.46 5.07 17.85 4.95 16.23 4.86V4.85L16.01 3.55C15.86 2.63 15.64 1.25 13.3 1.25H10.68C8.35001 1.25 8.13 2.57 7.97 3.54L7.76 4.82C6.83001 4.88 5.9 4.94 4.97 5.03L2.93001 5.23C2.51001 5.27 2.21 5.64 2.25 6.05C2.29 6.46 2.65 6.76 3.07 6.72L5.11001 6.52C10.35 6 15.63 6.2 20.93 6.73H21.01C21.39 6.73 21.72 6.44 21.76 6.05C21.7751 5.85024 21.7113 5.65253 21.5823 5.49925C21.4533 5.34596 21.2694 5.24931 21.07 5.23Z"
                                                fill="#969BA0" />
                                            <path opacity="0.399"
                                                d="M19.23 8.14C18.99 7.89 18.66 7.75 18.32 7.75H5.67999C5.33999 7.75 4.99999 7.89 4.76999 8.14C4.53999 8.39 4.40999 8.73 4.42999 9.08L5.04999 19.34C5.15999 20.86 5.29999 22.76 8.78999 22.76H15.21C18.7 22.76 18.84 20.87 18.95 19.34L19.57 9.09C19.59 8.73 19.46 8.39 19.23 8.14Z"
                                                fill="#969BA0" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M9.58 17C9.58 16.8011 9.65902 16.6103 9.79967 16.4697C9.94032 16.329 10.1311 16.25 10.33 16.25H13.66C13.8589 16.25 14.0497 16.329 14.1903 16.4697C14.331 16.6103 14.41 16.8011 14.41 17C14.41 17.1989 14.331 17.3897 14.1903 17.5303C14.0497 17.671 13.8589 17.75 13.66 17.75H10.33C10.1311 17.75 9.94032 17.671 9.79967 17.5303C9.65902 17.3897 9.58 17.1989 9.58 17ZM8.75 13C8.75 12.8011 8.82902 12.6103 8.96967 12.4697C9.11032 12.329 9.30109 12.25 9.5 12.25H14.5C14.6989 12.25 14.8897 12.329 15.0303 12.4697C15.171 12.6103 15.25 12.8011 15.25 13C15.25 13.1989 15.171 13.3897 15.0303 13.5303C14.8897 13.671 14.6989 13.75 14.5 13.75H9.5C9.30109 13.75 9.11032 13.671 8.96967 13.5303C8.82902 13.3897 8.75 13.1989 8.75 13Z"
                                                fill="#969BA0" />
                                        </svg>
                                    </div>
                                </div>
                                <div style="content: ''; width: 10px;"></div>
                                <div class="text_navbar"> Waste </div>
                            </a>
                            <div class="arrow_navbar" name="arrow_navbar">
                                <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.1875 1.375L6.8125 7L1.1875 12.625" stroke="#969BA0" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>

                        </div>
                    </li>
                    <div class="sub_navbar" name="sub_navbar">
                        <li class="nav-item nav_item">
                            <div class="d-flex justify-content-start">
                                <a class="d-flex justify-content-start align-items-center nav-link" href="#">
                                    <div style="content: ''; width: 35px;"></div>
                                    <div class="text_sub_navbar"> Revisi waste </div>
                                    <div style="content: ''; width: 35px;"></div>
                                    <div class="text_sub_navbar">5</div>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item nav_item">
                            <div class="d-flex justify-content-start">
                                <a class="d-flex justify-content-start align-items-center nav-link" href="#">
                                    <div style="content: ''; width: 35px;"></div>
                                    <div class="text_sub_navbar"> Detail waste </div>
                                    <div style="content: ''; width: 35px;"></div>
                                    <div class="text_sub_navbar">5</div>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item nav_item">
                            <div class="d-flex justify-content-start">
                                <a class="d-flex justify-content-start align-items-center nav-link" href="#">
                                    <div style="content: ''; width: 35px;"></div>
                                    <div class="text_sub_navbar"> Set item </div>
                                    <div style="content: ''; width: 35px;"></div>
                                    <div class="text_sub_navbar">5</div>
                                </a>
                            </div>
                        </li>
                    </div>
                    <li class="nav-item nav_item" onclick="nav_item_click(5);">
                        <div class="d-flex justify-content-between">
                            <a class="d-flex justify-content-start align-items-center nav-link" href="#">
                                <div>
                                    <div class="box_navbar">
                                        <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M4.245 0H13.755C14.914 0 15.493 1.04308e-07 15.961 0.163C16.4023 0.319388 16.8015 0.575414 17.1277 0.911182C17.454 1.24695 17.6984 1.65342 17.842 2.099C18 2.581 18 3.177 18 4.37V18.374C18 19.232 17.015 19.688 16.392 19.118C16.2172 18.9565 15.988 18.8668 15.75 18.8668C15.512 18.8668 15.2828 18.9565 15.108 19.118L14.625 19.56C14.3188 19.8432 13.9171 20.0004 13.5 20.0004C13.0829 20.0004 12.6812 19.8432 12.375 19.56C12.0688 19.2768 11.6671 19.1196 11.25 19.1196C10.8329 19.1196 10.4312 19.2768 10.125 19.56C9.81879 19.8432 9.41707 20.0004 9 20.0004C8.58293 20.0004 8.18121 19.8432 7.875 19.56C7.56879 19.2768 7.16707 19.1196 6.75 19.1196C6.33293 19.1196 5.93121 19.2768 5.625 19.56C5.31879 19.8432 4.91707 20.0004 4.5 20.0004C4.08293 20.0004 3.68121 19.8432 3.375 19.56L2.892 19.118C2.71721 18.9565 2.48798 18.8668 2.25 18.8668C2.01202 18.8668 1.78279 18.9565 1.608 19.118C0.985 19.688 0 19.232 0 18.374V4.37C0 3.177 -1.49012e-08 2.58 0.158 2.1C0.458 1.187 1.153 0.471 2.039 0.163C2.507 1.04308e-07 3.086 0 4.245 0ZM4 4.75C3.80109 4.75 3.61032 4.82902 3.46967 4.96967C3.32902 5.11032 3.25 5.30109 3.25 5.5C3.25 5.69891 3.32902 5.88968 3.46967 6.03033C3.61032 6.17098 3.80109 6.25 4 6.25H4.5C4.69891 6.25 4.88968 6.17098 5.03033 6.03033C5.17098 5.88968 5.25 5.69891 5.25 5.5C5.25 5.30109 5.17098 5.11032 5.03033 4.96967C4.88968 4.82902 4.69891 4.75 4.5 4.75H4ZM7.5 4.75C7.30109 4.75 7.11032 4.82902 6.96967 4.96967C6.82902 5.11032 6.75 5.30109 6.75 5.5C6.75 5.69891 6.82902 5.88968 6.96967 6.03033C7.11032 6.17098 7.30109 6.25 7.5 6.25H14C14.1989 6.25 14.3897 6.17098 14.5303 6.03033C14.671 5.88968 14.75 5.69891 14.75 5.5C14.75 5.30109 14.671 5.11032 14.5303 4.96967C14.3897 4.82902 14.1989 4.75 14 4.75H7.5ZM4 8.25C3.80109 8.25 3.61032 8.32902 3.46967 8.46967C3.32902 8.61032 3.25 8.80109 3.25 9C3.25 9.19891 3.32902 9.38968 3.46967 9.53033C3.61032 9.67098 3.80109 9.75 4 9.75H4.5C4.69891 9.75 4.88968 9.67098 5.03033 9.53033C5.17098 9.38968 5.25 9.19891 5.25 9C5.25 8.80109 5.17098 8.61032 5.03033 8.46967C4.88968 8.32902 4.69891 8.25 4.5 8.25H4ZM7.5 8.25C7.30109 8.25 7.11032 8.32902 6.96967 8.46967C6.82902 8.61032 6.75 8.80109 6.75 9C6.75 9.19891 6.82902 9.38968 6.96967 9.53033C7.11032 9.67098 7.30109 9.75 7.5 9.75H14C14.1989 9.75 14.3897 9.67098 14.5303 9.53033C14.671 9.38968 14.75 9.19891 14.75 9C14.75 8.80109 14.671 8.61032 14.5303 8.46967C14.3897 8.32902 14.1989 8.25 14 8.25H7.5ZM4 11.75C3.80109 11.75 3.61032 11.829 3.46967 11.9697C3.32902 12.1103 3.25 12.3011 3.25 12.5C3.25 12.6989 3.32902 12.8897 3.46967 13.0303C3.61032 13.171 3.80109 13.25 4 13.25H4.5C4.69891 13.25 4.88968 13.171 5.03033 13.0303C5.17098 12.8897 5.25 12.6989 5.25 12.5C5.25 12.3011 5.17098 12.1103 5.03033 11.9697C4.88968 11.829 4.69891 11.75 4.5 11.75H4ZM7.5 11.75C7.30109 11.75 7.11032 11.829 6.96967 11.9697C6.82902 12.1103 6.75 12.3011 6.75 12.5C6.75 12.6989 6.82902 12.8897 6.96967 13.0303C7.11032 13.171 7.30109 13.25 7.5 13.25H14C14.1989 13.25 14.3897 13.171 14.5303 13.0303C14.671 12.8897 14.75 12.6989 14.75 12.5C14.75 12.3011 14.671 12.1103 14.5303 11.9697C14.3897 11.829 14.1989 11.75 14 11.75H7.5Z"
                                                fill="#969BA0" />
                                        </svg>
                                    </div>
                                </div>
                                <div style="content: ''; width: 10px;"></div>
                                <div class="text_navbar"> Mutasi </div>
                            </a>
                            <div class="arrow_navbar" name="arrow_navbar">
                                <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.1875 1.375L6.8125 7L1.1875 12.625" stroke="#969BA0" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>

                        </div>
                    </li>
                    <div class="sub_navbar" name="sub_navbar">
                        <li class="nav-item nav_item">
                            <div class="d-flex justify-content-start">
                                <a class="d-flex justify-content-start align-items-center nav-link" href="#">
                                    <div style="content: ''; width: 35px;"></div>
                                    <div class="text_sub_navbar"> Detail mutasi </div>
                                    <div style="content: ''; width: 35px;"></div>
                                    <div class="text_sub_navbar">5</div>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item nav_item">
                            <div class="d-flex justify-content-start">
                                <a class="d-flex justify-content-start align-items-center nav-link" href="#">
                                    <div style="content: ''; width: 35px;"></div>
                                    <div class="text_sub_navbar"> Upload mutasi </div>
                                    <div style="content: ''; width: 35px;"></div>
                                    <div class="text_sub_navbar">5</div>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item nav_item">
                            <div class="d-flex justify-content-start">
                                <a class="d-flex justify-content-start align-items-center nav-link" href="#">
                                    <div style="content: ''; width: 35px;"></div>
                                    <div class="text_sub_navbar"> Klasifikasi mutasi </div>
                                    <div style="content: ''; width: 35px;"></div>
                                    <div class="text_sub_navbar">5</div>
                                </a>
                            </div>
                        </li>
                    </div>
                    <div style="content: ''; height: 50px"></div>


                    <li class="nav-item nav_item">
                        <a class="d-flex justify-content-start align-items-center nav-link" href="#">
                            <div>
                                <div class="box_navbar">
                                    <svg width="16" height="20" viewBox="0 0 16 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8 8C10.2091 8 12 6.20914 12 4C12 1.79086 10.2091 0 8 0C5.79086 0 4 1.79086 4 4C4 6.20914 5.79086 8 8 8Z"
                                            fill="#969BA0" />
                                        <path
                                            d="M16 15.5C16 17.985 16 20 8 20C0 20 0 17.985 0 15.5C0 13.015 3.582 11 8 11C12.418 11 16 13.015 16 15.5Z"
                                            fill="#969BA0" />
                                    </svg>
                                </div>
                            </div>
                            <div style="content: ''; width: 10px;"></div>
                            <div class="text_navbar"> Username </div>
                        </a>
                    </li>
                    <div class="d-flex justify-content-center">
                        <div style="content: ''; width: 90%; height: 1px;background: #F4F4F4;"></div>
                    </div>
                    <li class="nav-item nav_item">
                        <a class="d-flex justify-content-start align-items-center nav-link" href="#">
                            <div>
                                <div class="box_navbar">
                                    <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M7.796 0.243989C9.653 -0.174011 11 1.42199 11 2.99999V17C11 18.578 9.653 20.174 7.796 19.756C3.334 18.752 0 14.766 0 9.99999C0 5.23399 3.334 1.24799 7.796 0.243989ZM13.293 6.29299C13.4805 6.10552 13.7348 6.0002 14 6.0002C14.2652 6.0002 14.5195 6.10552 14.707 6.29299L17.707 9.29299C17.8945 9.48052 17.9998 9.73483 17.9998 9.99999C17.9998 10.2652 17.8945 10.5195 17.707 10.707L14.707 13.707C14.5184 13.8891 14.2658 13.9899 14.0036 13.9877C13.7414 13.9854 13.4906 13.8802 13.3052 13.6948C13.1198 13.5094 13.0146 13.2586 13.0123 12.9964C13.01 12.7342 13.1108 12.4816 13.293 12.293L14.586 11H6C5.73478 11 5.48043 10.8946 5.29289 10.7071C5.10536 10.5196 5 10.2652 5 9.99999C5 9.73477 5.10536 9.48042 5.29289 9.29288C5.48043 9.10535 5.73478 8.99999 6 8.99999H14.586L13.293 7.70699C13.1055 7.51946 13.0002 7.26515 13.0002 6.99999C13.0002 6.73482 13.1055 6.48052 13.293 6.29299Z"
                                            fill="#969BA0" />
                                    </svg>
                                </div>
                            </div>
                            <div style="content: ''; width: 10px;"></div>
                            <div class="text_navbar"> Logout </div>
                        </a>
                    </li>
                    <div style="content: ''; height: 15px;"></div>
                </ul>
            </div>
        </nav>

        <!-- Konten Utama -->
        {{-- <main class="col-md-10 px-md-4"> --}}
            <!-- Konten Anda di sini -->
        {{-- </main> --}}
    </div>
</div>
@include('navbar_admin.js')
