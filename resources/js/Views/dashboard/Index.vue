<template>
    <app-dashboard>
        <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <i class="nc-icon nc-single-02 text-success"></i>
                            </div>
                        </div>
                       
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">
                                    Managers
                                </p>
                                <p class="card-title">
                                    Title
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer ">
                    <hr>
                    <div class="stats">
                        <i class="fa fa-users"></i>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <i class="nc-icon nc-caps-small text-success"></i>
                            </div>
                        </div>
                       
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">
                                    Cources
                                </p>
                                <p class="card-title">
                                    course
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer ">
                    <hr>
                    <div class="stats">
                        <i class="fa fa-clipboard"></i>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <i class="nc-icon nc-bell-55 text-success"></i>
                            </div>
                        </div>
                        
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">
                                    Events
                                </p>
                                <p class="card-title">
                                    2
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer ">
                    <hr>
                    <div class="stats">
                        <i class="fa fa-calendar-check-o"></i>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <i class="nc-icon nc-badge text-warning"></i>
                            </div>
                        </div>
                        
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">
                                    Students
                                </p>
                                <p class="card-title">
                                    3
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer ">
                    <hr>
                    <div class="stats">
                        <i class="fa fa-users"></i>

                    </div>
                </div>
            </div>
        </div>

    </div>
  </app-dashboard>
</template>

<script>

import appDashboard from '../layout/Dashboard'
export default {
    components:{
       appDashboard
    }
    
}
</script>