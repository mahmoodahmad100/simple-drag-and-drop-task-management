<form>
  <div class="form-group">
    <label for="project">The project</label>
    <select class="form-control" id="project" name="project_id">
    	<option value="1">Test</option>
    	<option value="2" selected>Test 2</option>
    </select>
  </div>
  <div class="form-group">
    <label for="name">Name</label>
    <input class="form-control" id="name">
  </div>
  <div class="form-group">
    <label for="priority">Priority</label>
    <select class="form-control" id="priority" name="priority">
    	<option value="low">Low</option>
    	<option value="medium" selected>Medium</option>
    	<option value="high">High</option>
    </select>
  </div>
  <input type="hidden" name="order" value="1">
  <button type="submit" class="btn btn-primary">Submit</button>
</form>