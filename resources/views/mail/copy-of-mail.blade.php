<x-mail::message>
    ### Hello Dear Admin,

    {{ $acknowledgementData['fullname'] }} just submitted an application via the Sarcess portal, details are given below:


    Full Name: {{ $acknowledgementData['fullname'] }}

    Email: {{ $acknowledgementData['email'] }}

    purpose Of application: {{ $acknowledgementData['purpose'] }}

    Contact/Phone: {{ $acknowledgementData['phone'] }}

    Highest Qualification: {{ $acknowledgementData['qualification'] }}

    Country of residence: {{ $acknowledgementData['country'] }}

    Message: {{ $acknowledgementData['message'] }}

    Warm regards,

    SarkcessConsults, Mail Team

</x-mail::message>
