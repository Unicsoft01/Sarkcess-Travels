<x-mail::message>
    ### Hello Dear Admin,

    {{ $acknowledgementData['first_name'] }}  {{ $acknowledgementData['last_name'] }} just submitted an application via the Sarcess portal, details are given
    below:


    Full Name: {{ $acknowledgementData['first_name'] }}  {{ $acknowledgementData['last_name'] }}

    Email: {{ $acknowledgementData['email'] }}

    purpose Of application: {{ $acknowledgementData['purpose'] }}

    Contact/Phone: {{ $acknowledgementData['phone'] }}

    Highest Qualification: {{ $acknowledgementData['qualification'] }}

    Country of residence: {{ $acknowledgementData['country'] }}

    Message: {{ $acknowledgementData['message'] }}

    Warm regards,

    SarkcessConsults, Mail Team
</x-mail::message>
