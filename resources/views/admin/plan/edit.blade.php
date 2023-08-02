<x-app-layout>
    <div class="container">
        <div class="mx-auto" style="max-width:500px">
            <h4>Edit {{$plan->title}}</h4>
            <form action="{{route('admin.plans.update', $plan->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Enter Title" value="{{old('title', $plan->title)}}">
                    <small class="text-danger">{{$errors->first('title')}}</small>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" name="price" class="form-control" placeholder="$0.00" value="{{old('price', $plan->price)}}">
                    <small class="text-danger">{{$errors->first('price')}}</small>
                </div>
                <div class="form-group">
                    <label for="profit_interval">Profit Interval</label>
                    <select name="profit_interval" id="profit_interval" class="form-control">
                        <option {{$plan->profit_interval == 0 ? 'selected' : ''}} value="0">OFF</option>
                        <option {{$plan->profit_interval == 60 * 60 ? 'selected' : ''}} value="{{60 * 60}}">Hourly</option>
                        <option {{$plan->profit_interval == 60 * 60 * 24 ? 'selected' : ''}} value="{{60 * 60 * 24}}">Daily</option>
                        <option {{$plan->profit_interval == 60 * 60 * 24 ? 'selected' : ''}} value="{{60 * 60 * 24}}">Weekly</option>
                        <option {{$plan->profit_interval == 60 * 60 * 24 * 7 * 4 ? 'selected' : ''}} value="{{60 * 60 * 24 * 7 * 4}}">Monthly</option>
                    </select>
                    <small class="text-danger">{{$errors->first('profit_interval')}}</small>
                </div>


                <div class="form-group" x-data="{period: 60*60, value: 1}">
                    <label for="duration">Duration</label>
                    <small class="text-muted">(period of time this plan will last in seconds)</small>
                    <input class="form-control" type="text" name="duration" value="{{old('duration', $plan->duration)}}">
                    <small class="text-danger">{{$errors->first('duration')}}</small>
                </div>

                <div class="form-group bg-light p-1" x-data="{list:{{json_encode(old('data', $plan->data))}}, value:''}">
                    <label for="data">Features</label>
                    <div class="input-group bg-secondary p-1">
                        <input type="text" class="form-control" id="data" placeholder="eg. 10x profit on withdrawal"  x-model="value">
                        <button type="button" class="btn btn-primary" @click="value && list.push(value); value=''">+</button>
                    </div>
                    <template x-for="item in list">
                        <div class="input-group mt-2">
                            <input type="text" class="form-control" name="data[]" x-bind:value="item">
                            <button type="button" class="btn btn-primary" @click="list = list.filter((v) => item !=  v);">-</button>
                        </div>
                    </template>
                    <small class="text-danger">{{$errors->first('data')}}</small>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" name="description" id="description" class="form-control" value="{{old('description', $plan->description)}}" placeholder="Write short description about this plan">
                    <small class="text-danger">{{$errors->first('description')}}</small>
                </div>

                <button class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</x-app-layout>
