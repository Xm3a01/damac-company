<template>
    <div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a href="/dashboard" class="simple-text logo-small">
         <div class="logo-image-big">
          <img src="/assets/images/favico.ico" height="90" width="100" class="col-md-6 offset-md-3">
        </div>
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class=" ">
                <a href="/dashboard">
                    <i class="nc-icon nc-bank"></i>
                    <p>Home</p>
                </a>
            </li>
            <li class="">
                <a href="">
                    <i class="nc-icon nc-caps-small"></i>
                    <p>courses</p>
                </a>
            </li>
            <li class="">
                <a href="">
                    <i class="nc-icon nc-bell-55"></i>
                    <p>Events</p>
                </a>
            </li>
            <li class="">
                <a href="">
                    <i class="nc-icon nc-caps-small"></i>
                    <p>Gallery</p>
                </a>
            </li>
            @else
            <li class="">
                <a href="}">
                    <i class="nc-icon nc-caps-small"></i>
                    <p>courses</p>
                </a>
            </li>
            <li class="">
                <a href="">
                    <i class="nc-icon nc-bell-55"></i>
                    <p>Events</p>
                </a>
            </li>
            <li class="">
                <a href="">
                    <i class="nc-icon nc-single-02"></i>
                    <p>managers</p>
                </a>
            </li>
            <li class="">
                <a href="">
                    <i class="nc-icon nc-badge"></i>
                    <p>Students</p>
                </a>
            </li>
            <li>
            <li class="">
                <a href="">
                    <i class="nc-icon nc-caps-small"></i>
                    <p>Gallery</p>
                </a>
            </li>
            <li class="">
                <a href="">
                    <i class="nc-icon nc-single-02"></i>
                    <p>Trainers</p>
                </a>
            </li>
        </ul>
    </div>
</div>
</template>
<script>
export default {
    
}
</script>