<template>
    <div class="phonebook-container mt-5">
        <div class="phone-header pb-3">My Phonebook
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addNewModal">Add New</button>
        </div>
        <div class="phone-body">
            <input type="text" placeholder="search..." name="search" id="search" class="form-control">
            <ul>
                <li class="pb-4 mt-3">
                    <div class="float-left">Sushmita</div>  
                    <div class="float-right">
                        <button type="button" class="btn btn-primary">Add</button>
                        <button type="button" class="btn btn-success">Edit</button>
                        <button type="button" class="btn btn-light">Delete</button>
                    </div>
                </li>
                <div class="clearfix"></div>
                <li class="pb-4">
                    <div class="float-left">Lester</div>  
                    <div class="float-right">
                        <button type="button" class="btn btn-primary">Add</button>
                        <button type="button" class="btn btn-success">Edit</button>
                        <button type="button" class="btn btn-light">Delete</button>
                    </div>
                </li>
                <div class="clearfix"></div>
                <li class="pb-4">
                    <div class="float-left">Mama</div>  
                    <div class="float-right">
                        <button type="button" class="btn btn-primary">Add</button>
                        <button type="button" class="btn btn-success">Edit</button>
                        <button type="button" class="btn btn-light">Delete</button>
                    </div>
                </li>
            </ul>
        </div>  
    </div>
</template>
