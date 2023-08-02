<x-app-layout>
    <div class="modal-body modal-body-lg">
        <div class="nk-block-head nk-block-head-xs text-center">
            <h5 class="nk-block-title">Deposit {{$transaction->currency}}</h5>
            <div class="nk-block-text">
                <span class="sub-text-sm">Copy or Share this wallet address to add {{$transaction->currency}} from another source. Your external wallet could require a network fee for this transaction.</span>
            </div>
        </div>
        <div class="nk-block">
            <div class="buysell-overview">
                <div class="mx-auto my-4" style="max-width:300px">{!! $imgURL !!}</div>
            </div>

            <div class="buysell-field form-action text-center">
                <div>
                    <button type="button"
                           class="btn btn-lg btn-outline-light clipboard-init"
                           data-clipboard-action="copy"
                           data-clipboard-text="{{$transaction->address}}"
                           data-text="Copy Address"
                           data-success="Address Copied">
                       <em class="icon ni ni-copy"></em>
                       <span class="clipboard-text">Copy Address</span>
                   </button>
                   <form class="mt-4" action="{{route('transactions.destroy', $transaction)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-lg btn-danger">Cancel Order</button>
                    </form>
                </div>
            </div>

            <div class="my-5">
                <h5>Important Notice</h5>
                    <ul class="list-group">
                        <li>- Always ensure you are using the correct deposit address for each cryptocurrency, as using the wrong address may result in permanent loss of funds.</li>
                        <li>- We recommend starting with a small deposit for the first time to ensure everything is functioning smoothly.</li>
                        <li>- If you encounter any issues or have questions, our dedicated support team is available 24/7 to assist you.</li>
                    </ul>
            </div>
        </div><!-- .nk-block -->
    </div>
</x-app-layout>
