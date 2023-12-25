<div>
    <div class="row">
        <div class="col-md-12">
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            @if (session()->has('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
        </div>
    </div>

    @if ($registerForm)
        <form>
            <div class="row">
                
                {{-- name --}}
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">{{ trans('user.label.Name')}}
                            :</label>
                        <input type="text" wire:model="name" class="form-control" placeholder="{{ trans('user.placeholder.firstname')}}">
                        @error('name') <span class="text-danger error">{{ $message }}</span> @enderror
                    </div>
                </div>

                {{-- email --}}
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">{{ trans('user.label.Email')}}
                            :</label>
                        <input type="text" wire:model="email" class="form-control" placeholder="{{ trans('user.placeholder.email')}}">
                        @error('email') <span class="text-danger error">{{ $message }}</span> @enderror
                    </div>
                </div>

                {{-- password --}}
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">{{ trans('user.label.Password')}}
                            :</label>
                        <input type="text" wire:model="password" class="form-control" placeholder="{{ trans('user.placeholder.password')}}">
                        @error('password') <span class="text-danger error">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="col-md-12 text-center">
                    <button class="btn text-white btn-primary" wire:click.prevent="registerStore">
                        {{ trans('user.label.register')}}
                    </button>
                </div>

            </div>
        </form>
    @else
        <form>
            <div class="row">
                <div class="col-md-12">
                    {{-- email --}}
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">{{ trans('user.label.Email')}}:</label>
                            <input type="text" wire:model="email" class="form-control" placeholder="{{ trans('user.placeholder.email')}}">
                            @error('email') <span class="text-danger error">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    {{-- password --}}
                    <div class="col-md-12">
                        <div class="form-{{ trans('user.label.Passowrd')}}">
                            <label for="">Password:</label>
                            <input type="text" wire:model="password" class="form-control" placeholder="{{ trans('user.placeholder.password')}}">
                            @error('password') <span class="text-danger error">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="col-md-12 text-center">
                        <a class="btn text-white btn-success" wire:click.prevent="login">
                            <strong>Login</strong>
                        </a>
                    </div>
                    <br>
                    <div class="col-md-12 text-center">
                        {{ trans('user.button.amount')}}
                        <a class="btn text-white btn-primary" wire:click.prevent="register">{{ trans('user.button.click')}}</a>
                    </div>
                </div>
            </div>
        </form>
    @endif
</div>
