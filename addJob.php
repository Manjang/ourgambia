<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AngularJS Job Application</title>
</head>
<body ng-app="App">


    <div ng-controller="JobController">

    	<div class="modal fade" id="add_new_job_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
            
                    <div class="modal-body">

                        <ul class="alert alert-danger" ng-if="errors.length > 0">
                            <li ng-repeat="error in errors">
                                {{ error }}
                            </li>
                        </ul>

                        <div class="form-group">
                            <label for="name">Job Title</label>
                            <input ng-model="job_title" type="text" class="form-control"/>
                        </div>

                        <div class="form-group">
                            <label for="job_level">job_level</label>
                            <input ng-model="job_level" type="text" class="form-control" name="job_level" />
                        </div>

                        <div class="form-group">
                            <label for="specialization">specialization</label>
                            <input ng-model="specialization" type="text" class="form-control" name="specialization" />
                        </div>

                        <div class="form-group">
                            <label for="job_type">job_type</label>
                            <input ng-model="job_type" type="text" class="form-control" name="job_type" />
                        </div>

                        <div class="form-group">
                            <label for="min_qualification">min_qualification</label>
                            <input ng-model="min_qualification" type="text" class="form-control" name="min_qualification" />
                        </div>

                        <div class="form-group">
                            <label for="experience">experience</label>
                            <input ng-model="experience" type="text" class="form-control" name="experience" />
                        </div>

                        <div class="form-group">
                            <label for="application_deadline">application_deadline</label>
                            <input ng-model="application_deadline" type="text" class="form-control" name="application_deadline" />
                        </div>

                        <div class="form-group">
                            <label for="salary">salary</label>
                            <input ng-model="salary" type="text" class="form-control" name="salary" />
                        </div>

                        <div class="form-group">
                            <label for="job_location">job_location</label>
                            <input ng-model="job_location" type="text" class="form-control" name="job_location" />
                        </div>

                        <div class="form-group">
                            <label for="job_headline">job_headline</label>
                            <input ng-model="job_headline" type="text" class="form-control" name="job_headline" />
                        </div>

                        <div class="form-group">
                            <label for="job_description">job_description</label>
                            <input ng-model="job_description" type="text" class="form-control" name="job_description" />
                        </div>

                        <div class="modal-footer">
    	                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
    	                    <button type="button" class="btn btn-primary" ng-click="addJob()">Add Job</button>
    	                </div>

                    </div>
               
                </div>
            </div>
        </div>
    </div>

</body>
</html>