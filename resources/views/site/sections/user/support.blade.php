<div>
    <div class="section services wow fadeInUp">
        <div class="container">
            <div class="row col-lg-8 m-auto pt-5">
                <form method="POST" action="">
                    @csrf

                    <div class="w-100 px-1">
                        <label for="message_title"
                               class="col-md-4 pb-2">
                            {{ __('global.msgTitle') }}
                        </label>
                    </div>

                    <div class="w-100">
                        <input type="text" id="message_title"
                               name="message_title" value="{{ old('message_title') }}"
                               class="form-control bg-white focus-ring focus-ring-light border auth-input rounded"  required autofocus>
                    </div>


                    <div class="w-100 px-1">
                        <label for="message"
                               class="col-md-4 pb-2">
                            {{ __('global.msgDesc') }}
                        </label>
                    </div>

                    <div class="w-100">
                        <textarea name="message" class="form-control bg-white focus-ring focus-ring-light border auth-input rounded" style="height: 250px">
                        </textarea>
                    </div>

                    <div class="row mb-0">
                        <div class="text-start">
                            <button id="gawazy-btn" type="submit" class="btn">
                                {{ __('actions.send') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
