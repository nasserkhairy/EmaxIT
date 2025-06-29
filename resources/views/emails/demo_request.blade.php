<h2>{{ $data['form_source'] ?? 'Not specified' }} Request Submission</h2>

<table border="1" cellpadding="10" cellspacing="0" style="border-collapse: collapse; width: 100%; font-family: Arial, sans-serif;">
    <tr style="background-color: #f2f2f2;">
        <th align="left">Field</th>
        <th align="left">Value</th>
    </tr>
    <tr>
        <td><strong>Name</strong></td>
        <td>{{ $data['name'] }}</td>
    </tr>
    <tr>
        <td><strong>Job Title</strong></td>
        <td>{{ $data['job_title'] }}</td>
    </tr>
    <tr>
        <td><strong>Phone</strong></td>
        <td>{{ $data['Phone'] }}</td>
    </tr>
    <tr>
        <td><strong>Email</strong></td>
        <td>{{ $data['email'] }}</td>
    </tr>
    <tr>
        <td><strong>Company Name</strong></td>
        <td>{{ $data['Company_Name'] }}</td>
    </tr>
    <tr>
        <td><strong>Company Size</strong></td>
        <td>{{ $data['company_size'] ?? 'N/A' }}</td>
    </tr>
    <tr>
        <td><strong>Data Source</strong></td>
        <td>{{ $data['data_source'] ?? 'N/A' }}</td>
    </tr>
    <tr>
        <td><strong>Industry</strong></td>
        <td>{{ $data['industry'] ?? 'N/A' }}</td>
    </tr>
    <tr>
        <td><strong>Message</strong></td>
        <td>{{ $data['message'] }}</td>
    </tr>
</table>
