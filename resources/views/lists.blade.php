@extends('layouts.app')
<div id="Lists" class="tab-pane fade active show">
    <button class="color-red fs-12 border-0 ml-2 bg-transparent create_new_list">
    <!--                               <img src="{{asset('img/plus-icon.png')}}" alt="" width="14" height="14" class="mr-1">-->
        Create New List</button>
    <div class="d-flex ">
        <div class="card">
            <div class="roboto-18-gray mb-3">Favorites List</div>
            <div class="roboto-16 my-2">Favorites List</div>
            <div class="roboto-12 mb-1">1 Influencer</div>
            <div class="d-flex justify-content-end">
                <button class="gray-bordered-btn list-see-more">See More </button>
            </div>
        </div>
        <div class="card">
            <div class="roboto-18-gray mb-3">Favorites List</div>
            <div class="roboto-16 my-2">Nina Mendes</div>
            <div class="roboto-12 mb-2">1 Influencer</div>
            <div class="d-flex justify-content-end">
                <button class="gray-bordered-btn list-see-more">See More </button>
            </div>
        </div>
    </div>
</div>
