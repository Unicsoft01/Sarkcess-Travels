<x-mail::message>
    ### Hello {{ $acknowledgementData['fullname'] }},

    @php $purpose = $acknowledgementData['purpose'] @endphp

    @if ($purpose == 'Study Abroad inquiries')
        Thank you for applying with Sarkcess Consults Ltd.! We’re thrilled to support you on your journey to studying abroad.

        Here’s what happens next:

        - Application Review: Our team will carefully review your application.
        - Next Steps: Once reviewed, we’ll reach out with any additional requirements or guidance to proceed.

        If you have any questions, feel free to contact us anytime: either by sending us an email or via our Contact us
        page/Means

        Warm regards,

        SarkcessConsults, Application Team.
    @elseif ($purpose == 'Visa Assistance')
        Thank you for reaching out about study visa assistance! Our admissions team at Sarkcess Consults Ltd. has received your inquiry. We’ll review the details and respond with specific guidance on your next steps. In the meantime, you can check out our [blog or FAQ page] for additional visa tips.

        If you have any questions, feel free to contact us anytime: either by sending us an email or via our Contact us page/Means

        Warm regards,

        SarkcessConsults, Admission Team.
    @elseif ($purpose == 'Application Submission')
        Thank you for submitting your application to Sarkcess Consults Ltd. We’ve received your documents and will begin the review process shortly. You’ll receive an update once we’ve evaluated your application, and we’ll notify you if any additional information is required.

        If you have any questions, feel free to contact us anytime: either by sending us an email or via our Contact us page/Means

        Warm regards,

        SarkcessConsults, Application Team.
    @else
        Thank you for contacting Sarkcess Consults! Our team has received your inquiry. We’ll get back to you within the shortest time possible with the information you need. In the meantime, feel free to explore our website or connect with us for more details about studying abroad.

        If you have any questions, feel free to contact us anytime: either by sending us an email or via our Contact us
        page/Means

        Warm regards,

        SarkcessConsults, Enquiry Team
    @endif

</x-mail::message>
