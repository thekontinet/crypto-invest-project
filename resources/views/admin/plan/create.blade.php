<x-app-layout>
    <div class="container">
        <div class="mx-auto" style="max-width:500px">
            <h4>Create New Plan</h4>
            <form action="{{route('admin.plans.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" value="{{old('title')}}" class="form-control" placeholder="Enter Title">
                    <small class="text-danger">{{$errors->first('title')}}</small>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" name="price" value="{{old('price')}}" class="form-control" placeholder="$0.00">
                    <small class="text-danger">{{$errors->first('price')}}</small>
                </div>
                <div class="form-group">
                    <label for="profit_interval">Profit Interval</label>
                    <select name="profit_interval" id="profit_interval" class="form-control">
                        <option value="0">OFF</option>
                        <option value="{{60 * 60}}">Hourly</option>
                        <option value="{{60 * 60 * 24}}">Daily</option>
                        <option value="{{60 * 60 * 24 * 7}}">Weekly</option>
                        <option value="{{60 * 60 * 24 * 7 * 4}}">Monthly</option>
                    </select>
                    <small class="text-danger">{{$errors->first('profit_interval')}}</small>
                </div>
                <div class="form-group" x-data="{period: 60*60, value: 1}">
                    <label for="duration">Duration</label>
                    <small class="text-muted">(period of time this plan will last)</small>
                    <div class="input-group">
                        <input type="number" class="form-control" placeholder="1" x-model="value">
                        <div class="input-group-append">
                            <select id="duration_interval" class="form-select" x-model="period">
                                <option value="{{60 * 60}}">Hour</option>
                                <option value="{{60 * 60 * 24}}">Day</option>
                                <option value="{{60 * 60 * 24 * 7}}">Week</option>
                                <option value="{{60 * 60 * 24 * 7 * 4}}">Month</option>
                            </select>
                        </div>
                    </div>
                    <input type="text" name="duration" value="{{old('duration')}}" x-model='period * value' hidden>
                    <small class="text-danger">{{$errors->first('duration')}}</small>
                </div>

                <div class="form-group bg-light p-1" x-data="{list:[], value:''}">
                    <label for="data">Features</label>
                    <div class="input-group bg-secondary p-1">
                        <input type="text" class="form-control" id="data" placeholder="eg. 10x profit on withdrawal"  x-model="value" @blur="value && list.push(value); value=''">
                        <button type="button" class="btn btn-primary" @click="value && list.push(value); value=''">+</button>
                    </div>
                    <small class="text-danger">{{$errors->first('data')}}</small>
                    <template x-for="item in list">
                        <div class="input-group mt-2">
                            <input type="text" class="form-control" name="data[]" x-bind:value="item">
                            <button type="button" class="btn btn-primary" @click="list = list.filter((v) => item !=  v);">-</button>
                        </div>
                    </template>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" name="description" value="{{old('description')}}" id="description" class="form-control" placeholder="Write short description about this plan">
                    <small class="text-danger">{{$errors->first('description')}}</small>
                </div>

                <button class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</x-app-layout>
