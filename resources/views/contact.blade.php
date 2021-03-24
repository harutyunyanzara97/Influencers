@extends('layouts.app')
<div class="tab-pane p-22-32" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
    <h3 class="fs-18-red">Contact with influencer</h3>
    <div class="p-22-32">
        <div class="bg-light-blue py-4">
            <form action="#" class="pb-4">
                <div class="d-flex">
                    <div class="flex-1 px-4">
                        <div class="form-group">
                            <label for="nameCampaign1" class="fs-normal-12">Campaign Name:</label>
                            <input type="text" class="form-control h--50 fs-14-black text-left" id="nameCampaign1"
                                   placeholder="Campaign Name">
                        </div>
                        <div class="form-group relative">
                            <label for="SelectReport" class="fs-normal-12">Select Report</label>
                            <select type="text" class="form-control h--50 fs-14-black text-left" id="SelectReports">
                                <option value="Campaign Details" selected disabled>Campaign Details</option>
                                <option value="1">1</option>
                                <option value="1">2</option>
                                <option value="1">3</option>
                                <option value="1">4</option>

                            </select>
                            <i class="angle-down top-42"><img src="{{asset('img/arrow-down-small.png')}}" alt=""></i>
                        </div>
                        <div class="form-group">
                            <label for="reportText" class="fs-normal-12">Report Text</label>
                            <textarea type="text" rows="10" class="form-control fs-14-black text-left no-resize"
                                      id="reportText" placeholder="Report Text"></textarea>
                        </div>
                    </div>
                    <div class="flex-1 px-4">

                    </div>
                </div>
                <button type="submit" class="btn-red mt-4 br-5 m-l--20">Save</button>
            </form>
        </div>
    </div>
</div>

