@include('users.header')





<div class="flex justify-between  gap-5 px-24 py-12 bg-gray-400">
    <div class="flex flex-col gap-y-12 text-center align-center pt-6 px-12 w-1/2 ">
        <div class="font-bold text-2xl">
            <h2>Lorem ipsum dolor sit amet</h2>
            <h1 class="text-6xl text-white">Inscrivez pour trouver tout ce que vous cherchez</h1>
        </div>

        <div class="my-4 ">
          <p>Vous avez déjà un compte ?</p>
          <a href=" {{ route('lukaye.loginName') }} " class="text-bold text-gray-100">Connectez vous</a>
        </div>

        <div class="">
          <img src="{{ asset('images/maps.jpg') }}" alt="" class="h-32 w-full rounded-lg">
        </div>

    </div>


    <div class="w-1/2 bg-form flex flex-col align-center text-center px-16 py-6 rounded-lg" >

      <h3 class="pt-4 text-2xl text-center my-6">Create an Account!</h3>

						<form class="px-8 pt-6 pb-8 mb-4 bg-gray-400  rounded">
							<div class="mb-4 md:flex md:justify-between">
								<div class="mb-4 md:mr-2 md:mb-0">
									<label class="block mb-2 text-sm font-bold text-gray-700" for="firstName">
										First Name
									</label>
									<input
										class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
										id="firstName"
										type="text"
										placeholder="First Name"
									/>
								</div>
								<div class="md:ml-2">
									<label class="block mb-2 text-sm font-bold text-gray-700" for="lastName">
										Last Name
									</label>
									<input
										class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
										id="lastName"
										type="text"
										placeholder="Last Name"
									/>
								</div>
							</div>
							<div class="mb-4">
								<label class="block mb-2 text-sm font-bold text-gray-700" for="email">
									Email
								</label>
								<input
									class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
									id="email"
									type="email"
									placeholder="Email"
								/>
							</div>
							<div class="mb-4 md:flex md:justify-between">
								<div class="mb-4 md:mr-2 md:mb-0">
									<label class="block mb-2 text-sm font-bold text-gray-700" for="password">
										Password
									</label>
									<input
										class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border border-red-500 rounded shadow appearance-none focus:outline-none focus:shadow-outline"
										id="password"
										type="password"
										placeholder="******************"
									/>
									<p class="text-xs italic text-red-500">Please choose a password.</p>
								</div>
								<div class="md:ml-2">
									<label class="block mb-2 text-sm font-bold text-gray-700" for="c_password">
										Confirm Password
									</label>
									<input
										class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
										id="c_password"
										type="password"
										placeholder="******************"
									/>
								</div>
							</div>
							<div class="mb-6 text-center">
								<button
									class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline"
									type="button"
								>
									Register Account
								</button>
							</div>
							<hr class="mb-6 border-t" />
							<div class="text-center bg-transparent">
							<h1>5</h1>
							</div>
						</form>
    </div>
</div>
