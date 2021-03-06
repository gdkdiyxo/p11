@php
  $experience_type = [
    'project'   =>'Project',
    'freelance' => 'Freelance',
    'training'  => 'Training',
    'other'     => 'Other'
  ];
@endphp
<div class="row">
  <div class="col-xs-12 col-sm-6">
    <div class="form-group">
      <label for="" class="control-label"></label>
      <select name="experience[experience_type]" id="" class="form-control">
        <option value="">Select</option>
        @foreach($experience_type as $key => $value)
          <option value="{{$key}}" @if($key == $experience->experience_type) selected="selected" @endif>{{$value}}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label for="" class="control-label">Title</label>
      <input type="text" class="form-control" name="experience[title]" placeholder="Title" value="{{$experience->title}}">
    </div>
    <div class="form-group">
      <label for="" class="control-label">Organization</label>
      <input type="text" class="form-control" name="experience[organization]" placeholder="Organization" value="{{$experience->organization}}">
    </div>
    <div class="form-group">
      <label for="" class="control-label">Location</label>
      <input type="text" class="form-control" name="experience[location]" placeholder="Location" value="{{$experience->location}}">
    </div>
  </div>
  <div class="col-xs-12 col-sm-6">
    <div class="form-group">
      <label for="" class="control-label">Link</label>
      <input type="text" class="form-control" name="experience[link]" placeholder="Link" value="{{$experience->link}}">
    </div>
    <div class="form-group">
      <label for="" class="control-label">Description</label>
      <textarea name="experience[job_description]" id="" cols="30" rows="5"
                class="form-control" placeholder="Description">{{$experience->job_description}}</textarea>
    </div>
  </div>
</div>