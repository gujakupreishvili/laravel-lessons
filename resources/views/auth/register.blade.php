<x-layout>
<x-slot:heading>
   Register
  </x-slot:heading>
  <form method="POST" action="/register">
    @csrf
  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">


      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

        <x-form-field>
          <x-form-lable for="first_name">First Name</x-form-lable>
            <x-form-input id="first_name" type="text" name="first_name"  />
            <x-form-error name="first_name"/>
        </x-form-field>

        <x-form-field >
        <x-form-lable for="last_name">Last Name</x-form-lable>
        <x-form-input id="last_name" type="text" name="last_name"  />
          <x-form-error name="last_name"/>
        </x-form-field>

        <x-form-field >
        <x-form-lable for="email">Email</x-form-lable>
        <x-form-input id="email" type="email" name="email"  />
          <x-form-error name="email"/>
        </x-form-field>

        <x-form-field >
        <x-form-lable for="password">Password</x-form-lable>
        <x-form-input id="password" type="password" name="password"  />
          <x-form-error name="password"/>
        </x-form-field>

        <x-form-field >
        <x-form-lable for="password_confrimation">Confrim Password</x-form-lable>
        <x-form-input id="password_confrimation" type="password" name="password_confrimation"  />
          <x-form-error name="password_confrimation"/>
        </x-form-field>

      </div>
    </div>
  </div>

  <div class="mt-6 flex items-center justify-end gap-x-6">
    <a href="/" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
    <x-form-button>Register</x-form-button>
  </div>
</form>

</x-layout>