{{-- resources/views/components/footer.blade.php --}}
<footer class="bg-white text-neutral-700 font-sans">
  <div class="max-w-screen-xl mx-auto px-6 md:px-8 py-12">
    {{-- Top: links + newsletter --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-16">
      {{-- Left: Customer Care --}}
      <div class="font-serif">
        <h3 class="text-xs tracking-widest text-neutral-500 mb-6">CUSTOMER CARE</h3>

        <ul class="space-y-4 text-neutral-500">
          <li><a href="#" class="hover:text-neutral-700">Online Orders</a></li>
          <li><a href="#" class="hover:text-neutral-700">Shipping</a></li>
          <li><a href="#" class="hover:text-neutral-700">Exchanges & Returns</a></li>
          <li><a href="#" class="hover:text-neutral-700">OM Membership Programme</a></li>
          <li><a href="#" class="hover:text-neutral-700">Personal Shopping</a></li>
        </ul>
      </div>

      {{-- Right: Newsletter --}}
      <div>
        <h3 class="font-serif text-xs tracking-widest text-neutral-500 mb-6">SIGN UP FOR THE LOW DOWN</h3>

        <p class="text-neutral-400 mb-6">
          All access to news, previews and perks straight to your inbox.
        </p>

        <form action="#" method="POST" class="max-w-lg" onsubmit="event.preventDefault();">
  <div class="flex flex-col sm:flex-row gap-3">
    <label for="newsletter-email" class="sr-only">Email address</label>

    <input
      id="newsletter-email"
      name="email"
      type="email"
      placeholder="Enter your email address"
      class="w-full border border-neutral-200 rounded-md px-4 py-3 placeholder-neutral-400 focus:outline-none focus:ring-2 focus:ring-neutral-200"
    >

    <button
      type="submit"
      class="mt-2 sm:mt-0 inline-block px-8 py-3 bg-[#F1E1D8] text-neutral-700 rounded-md tracking-widest text-sm font-medium hover:brightness-95"
    >
      SUBSCRIBE
    </button>
  </div>
</form>

      </div>
    </div>

    {{-- Divider --}}
    <div class="border-t border-neutral-100 mt-10 pt-8">
      <div class="flex flex-col md:flex-row items-center justify-between gap-6">
        {{-- Left: copyright / brand --}}
        <div class="text-sm text-neutral-400 flex items-center gap-4">
          <span class="text-xs">©</span>
          <span class="font-serif tracking-wide text-neutral-700">MidnitePearl</span>
        </div>

        {{-- Right: payment icons (stacked on mobile) --}}
        <div class="flex items-center gap-3">
          {{-- small helper so icons stay aligned and accessible --}}
          <nav class="flex items-center gap-3" aria-label="Payment methods">
            <img src="{{ asset('images/payments/amex.png') }}" alt="American Express" class="h-8 w-auto">
            <img src="{{ asset('images/payments/applepay.png') }}" alt="Apple Pay" class="h-8 w-auto">
            <img src="{{ asset('images/payments/bancontact.png') }}" alt="Bancontact" class="h-8 w-auto">
            <img src="{{ asset('images/payments/gpay.png') }}" alt="Google Pay" class="h-8 w-auto">
            <img src="{{ asset('images/payments/mastercard.png') }}" alt="Mastercard" class="h-8 w-auto">
            <img src="{{ asset('images/payments/shop.png') }}" alt="Shop" class="h-8 w-auto">
            <img src="{{ asset('images/payments/unionpay.png') }}" alt="UnionPay" class="h-8 w-auto">
            <img src="{{ asset('images/payments/visa.png') }}" alt="Visa" class="h-8 w-auto">
          </nav>
        </div>
      </div>
    </div>
  </div>
</footer>
