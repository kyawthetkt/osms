<!-- PAGENO: OSMS-017 -->
<x-forms.form-tag :attrs="['id' => 'customer-form', 'class' => 'customer-form', 'method' => $method, 'action' => $action ]">
    <input type="hidden" name="redirectUrl" value="{{ $redirectUrl?? url()->current() }}" />
    <input type="hidden" name="urlSegments" value="{{ isset($urlSegments)?json_encode($urlSegments): '' }}" />
    <x-forms.select-with-key-value :attrs="['class' => 'ts_id escaped-select', 'name' => 'shop_id', 'selected' => $customer->shop_id, 'label' => 'Shop', 'list' => $shops]" /> 
    <x-forms.text-input :attrs="['name' => 'name', 'value' => $customer->name, 'required' => 'required', 'label' => 'Name']" />
    <x-forms.text-input :attrs="['name' => 'email', 'value' => $customer->email, 'label' => 'E-mail']" />
    <x-forms.text-input :attrs="['name' => 'phone', 'value' => $customer->phone, 'label' => 'Phone', 'required' => 'required']" />
   <!--  coordinates -->
    <x-forms.select-with-object :attrs="['class' => 'ts_id escaped-select', 'name' => 'ts_id', 'selected' => $customer->ts_id, 'label' => 'Township', 'list' => $townships]" />
    <x-forms.textarea :attrs="['name' => 'address', 'value' => $customer->address, 'required' => 'required', 'label' => 'Address']" />
    <x-forms.textarea :attrs="['name' => 'desc', 'value' => $customer->desc, 'label' => 'Description']" />
    <hr/>
    <x-forms.submit confirmationText='{{ $confirmationText?? "Are you sure to submit?" }}' 
    :attrs="['name' => 'submit', 'class'=> 'common-sb-btn', 'value' => '', 'placeholder' => '', 'label' => $submitLabel]" />
</x-forms.form-tag>