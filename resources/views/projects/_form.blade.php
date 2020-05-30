<form name="mainForm" ng-submit="submitForm()" novalidate>
  <div class="form-group" ng-class="{'has-error': mainForm.name.$dirty && mainForm.name.$invalid}">
    <label for="name">Name</label>
    <input class="form-control" id="name" name="name" ng-model="project.name" required>
  	<div class="invalid-feedback has-error" ng-show="mainForm.name.$dirty && mainForm.name.$invalid">
    	<div ng-show="mainForm.name.$error.required">name is required</div>
  	</div>
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <textarea type="password" class="form-control" id="description" name="description" ng-model="project.description"></textarea>
  </div>
  <button class="btn btn-primary" ng-disabled="mainForm.$invalid" type="submit">Submit</button>
</form>