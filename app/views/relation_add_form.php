<div class="well">
    <form role="form">
      <div class="form-group">
        <label for="">First name</label>
        <input type="text" ng-model="relation.user.fname" class="form-control" id="" placeholder="Enter first name">
      </div>
      <div class="form-group">
        <label for="">Last name</label>
        <input type="text" class="form-control" ng-model="relation.user.lname" placeholder="Enter last name">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="text" class="form-control"  ng-model="relation.user.email" placeholder="Enter email">
      </div>
        <button type="submit" class="pull-right btn btn-inverse btn-xs">Link</button>
        <div class="clearfix"></div>
    <hr>
        <div class="form-group">
        <label for="relation.description">Description</label>
        <textarea class="form-control" name="relation.description" ng-model="relation.description" rows=10 placeholder="Enter description"></textarea>
      </div>
      <button type="submit" class="btn btn-info btn-xs">Save</button>
        

        
    </form>
</div>