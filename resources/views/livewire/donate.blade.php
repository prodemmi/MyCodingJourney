@section('body')
    <div class="max-w-2xl">
        <div>
            <p>Hi there!</p>
            <br>
            <p>Thanks for considering a donation to support my work on this website. Your support means a lot to me and
                helps me continue creating and improving the content.</p>
            <p>If you find the content useful and would like to support me, please consider making a donation. Any
                amount is appreciated and goes a long way in helping me keep the site up and running.</p>
            <p>Thank you for your support and feel free to contact me if you have any questions or feedback.</p>
            <p>Best regards,</p>
            <br>
            <br>
            <p>Emad Malekpour</p>
        </div>
        <br>
        <br>
        <form action="/donate" method="POST">
            {{ csrf_field() }}
            <div class="mb-4">
                <label for="name" class="block font-medium text-gray-700">Name:</label>
                <input type="text" name="name" id="name" required
                       class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            </div>

            <div class="mb-4">
                <label for="email" class="block font-medium text-gray-700">Email:</label>
                <input type="email" name="email" id="email" required
                       class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            </div>

            <div class="flex w-full mb-4">
                <div class="w-full">
                    <label for="price" class="block font-medium text-gray-700">Price:</label>
                    <input type="number" min="1" step="0.01" name="price" id="price" required
                           class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
                <div class="w-36 ml-4">
                    <label for="currency">Currency</label>
                    <select name="currency" id="currency"
                            class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        <option value="USD" selected>USD</option>
                        <option value="USDT">USDT</option>
                    </select>
                </div>
            </div>

            <div class="mb-4">
                <label for="purpose" class="block font-medium text-gray-700">Purpose:</label>
                <input type="text" name="purpose" id="purpose"
                       class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            </div>

            <div class="flex justify-center">
                <button type="submit"
                        class="bg-indigo-500 text-white rounded-md py-2 px-4 hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Donate
                </button>
            </div>
        </form>
    </div>
@endsection
