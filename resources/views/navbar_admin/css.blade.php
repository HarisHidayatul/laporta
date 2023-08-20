<style>
    .arrow_navbar_top {
        width: 30px;
        height: 30px;
        top: 60px;
        left: 223px;
        padding: 8px 12px 8px 12px;
        border-radius: 20px;
        gap: 10px;
        angle: -180 deg;
        box-shadow: -1px 1px 5px 0px #A6A6A640;
        position: absolute;
        display: flex;
        justify-content: center;
        background: #FFFFFF;
        cursor: pointer;
    }

    .box_navbar {
        width: 24px;
        /* Lebar box */
        height: 24px;
        /* Tinggi box */
        display: inline-block;
        /* Agar gambar tidak keluar dari box */
        position: relative;
        /* Memastikan posisi gambar relatif terhadap box */
        overflow: hidden;
        /* Untuk mengatur gambar agar tidak keluar dari box */
        fill: #9C9C9C;
    }

    .box_navbar img {
        width: auto;
        /* Agar gambar mengisi seluruh lebar box */
        height: auto;
        /* Agar tinggi gambar disesuaikan dengan lebar */
        position: absolute;
        /* Agar gambar terletak di dalam box */
        top: 0;
        /* Posisi atas */
        left: 0;
        /* Posisi kiri */
        /* filter: invert(100%) sepia(0%) saturate(7458%) hue-rotate(82deg) brightness(105%) contrast(105%); */
    }

    .box_navbar svg {
        width: auto;
        /* Agar gambar mengisi seluruh lebar box */
        height: auto;
        /* Agar tinggi gambar disesuaikan dengan lebar */
        position: absolute;
        /* Agar gambar terletak di dalam box */
        top: 0;
        /* Posisi atas */
        left: 0;
        /* Posisi kiri */
    }

    .text_navbar {
        color: #9C9C9C;
        font-size: 14px;
        font-weight: 600;
        margin-top: -7px;
    }

    .text_sub_navbar {
        color: #969BA0;
        font-weight: 400;
        font-size: 12px;
    }

    .left_navbar {
        width: 239px;
        border-radius: 0px 24px 24px 0px
    }

    .nav_item {
        margin-left: 10px;
        margin-right: 10px;
        padding-right: 15px;
        margin-top: 5px;
        border-radius: 12px;
        cursor: pointer;
        /* background: red; */
    }

    .nav_item:hover {
        background: #FFF4F4;
        color: white;
    }

    .nav_item:hover .text_navbar {
        color: #B20731;
        /* background: #B20731; */
    }

    .nav_item:hover .text_sub_navbar {
        color: #B20731;
    }

    .nav_item:hover .box_navbar svg path {
        fill: #B20731;
        stroke: #B20731;
    }

    .nav_item:hover .arrow_navbar svg path {
        stroke: #B20731;
    }

    .nav-item.active {
        background: #B20731;
    }

    .nav-item.active .text_navbar {
        color: white;
    }

    .nav-item.active .box_navbar svg path {
        fill: white;
        stroke: white;
    }

    .arrow_navbar svg {
        display: inline-block;
        transition: transform 0.3s ease-in-out;
        height: 15px;
        width: 15px;
        margin-top: 10px;
    }

    .arrow_navbar.active svg {
        transform: rotate(90deg);
    }

    .sub_navbar {
        display: none;
        animation: slide-in 0.5s ease-in-out;
    }

    .sub_navbar.closing {
        animation: slide-out 0.3s ease-in-out;
    }

    @keyframes slide-in {
        from {
            transform: translateX(-100%);
        }

        to {
            transform: translateX(0);
        }
    }

    @keyframes slide-out {
        from {
            transform: translateX(0);
        }

        to {
            transform: translateX(-100%);
        }
    }
</style>
