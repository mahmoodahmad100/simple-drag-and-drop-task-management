<form name="mainForm" ng-submit="submitForm()" novalidate>
  <div class="form-group">
    <label for="project">The project</label>
    <select class="form-control" id="project" name="project_id" ng-model="task.project_id" required>
    	<option ng-repeat="project in projects" ng-value="@{{ project.id }}">@{{ project.name }}</option>
    </select>
    <div class="invalid-feedback has-error" ng-show="mainForm.project_id.$dirty && mainForm.project_id.$invalid">
      <div ng-show="mainForm.project_id.$error.required">project is required</div>
    </div>
  </div>
  <div class="form-group">
    <label for="name">Name</label>
    <input class="form-control" id="name" name="name" ng-model="task.name" required>
    <div class="invalid-feedback has-error" ng-show="mainForm.name.$dirty && mainForm.name.$invalid">
      <div ng-show="mainForm.name.$error.required">name is required</div>
    </div>
  </div>
  <div class="form-group">
    <label for="priority">Priority</label>
    <select class="form-control" id="priority" name="priority" ng-model="task.priority" required>
    	<option value="low">Low</option>
    	<option value="medium" selected>Medium</option>
    	<option value="high">High</option>
    </select>
    <div class="invalid-feedback has-error" ng-show="mainForm.priority.$dirty && mainForm.priority.$invalid">
      <div ng-show="mainForm.priority.$error.required">priority is required</div>
    </div>
  </div>
  <input type="hidden" name="task.order" ng-model="task.order">
  <button type="submit" class="btn btn-primary" ng-disabled="mainForm.$invalid">Submit</button>
</form>