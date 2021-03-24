@extends('layouts.app')

<form action="{{url('/store')}}" method="post" class="pb-4" enctype="multipart/form-data">
                @csrf
                <div  class="d-flex">
                    <div class="flex-1 px-4">
                        <div class="form-group">
                            <label for="nameCampaign" class="fs-normal-12">Campaign Name:</label>
                            <input type="text" class="form-control h--50 fs-14-black text-left" name="title" id="nameCampaign" placeholder="Campaign Name">
                        </div>
                        <div class="form-group">
                            <label for="CampaignDetails" class="fs-normal-12">Campaign Details</label>
                            <input type="text" class="form-control h--50 fs-14-black text-left" name="details" id="CampaignDetails" placeholder="Campaign Details">
                        </div>
                        <div class="form-group">
                            <label for="CampaignCategory" class="fs-normal-12">Category</label>
                            <br>
                            <select name="category[]">
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="CampaignHashTags" class="fs-normal-12">Post famous words</label>
                            <input type="text" class="form-control h--50 fs-14-black text-left" name="hashtags" id="CampaignHashTags" placeholder="Post famous words">
                        </div>
                    </div>
                    <div class="flex-1 px-4">
                        <div class="form-group">
                            <label for="CampaignCost" class="fs-normal-12">Cost Per Post Rate</label>
                            <input type="number" class="form-control h--50 fs-14-black text-left" name="per_post_rate" id="CampaignCost" placeholder="Cost Per Post Rate">
                        </div>
                        <div class="form-group">
                            <label for="CampaignGEO" class="fs-normal-12">GEO</label>
                            <input type="text" class="form-control h--50 fs-14-black text-left" name="location" id="CampaignGEO" placeholder="GEO">
                        </div>
                        <div class="form-group">
                            <label for="URLCampaign" class="fs-normal-12">Landing Page URL</label>
                            <input type="url" class="form-control h--50 fs-14-black text-left" name="url" id="URLCampaign" placeholder="Landing Page URL">
                        </div>
                        <div class="form-group">
                            <label for="CampaignDate" class="fs-normal-12">Start Date and End Date</label>
                            <input type="date" class="form-control h--50 fs-14-black text-left" name="start_date" id="CampaignDate" placeholder="Start Date">
                            <input type="date" class="form-control h--50 fs-14-black text-left" name="end_date" id="CampaignDate" placeholder="End Date">

                        </div>
                        <div class="form-group mt-4 pt-1 w-50">
                            <div class="input-group my-3 px-2 py-2 bg-white border-input">
                                <input id="upload" type="file" name="photo[]" onchange="readURL(this);" class="form-control">
                                <label id="upload-label" for="upload" class="h--50 fs-14-black text-left text-muted">
                                    <img src="img/photo-icon.png" alt="" class="mr-2">Upload Images (Not Mandatory)</label>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn-red mt-4 br-5 m-l--20">Submit</button>
            </form>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<!-- <script src="js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script> -->
<script src="{{asset('js/clientDashboard.js')}}" type="text/javascript"></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="{{asset('js/ststistics.js')}}"></script>

<script>
    function openNav() {
        document.getElementById("left-sidebar-fix").classList.add("open-sidebar");
        document.getElementById("main").style.marginLeft = "240px";
        document.getElementById("openbtn").classList.add("d-none");
        document.getElementById("openbtn").classList.remove("d-block");
        document.getElementById("closebtn").classList.remove("d-none");
        document.getElementById("closebtn").classList.add("d-block");
    }

    function closeNav() {
        document.getElementById("left-sidebar-fix").classList.remove("open-sidebar");
        document.getElementById("main").style.marginLeft = "80px";
        document.getElementById("closebtn").classList.remove("d-block");
        document.getElementById("closebtn").classList.add("d-none");
        document.getElementById("openbtn").classList.add("d-block");
    }
</script>

