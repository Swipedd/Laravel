<!DOCTYPE html>
<html>
<head>
    <title>Docenten</title>
</head>
<body>
    <h1>Docenten</h1>
    <ul>
        @foreach($docenten as $docent)
            <li>
                <strong>{{ $docent->naam }}</strong> - Hobby: {{ $docent->hobby }}
                <ul class="vak">
                    @foreach($docent->vakken as $vak)
                        <li>{{ $vak->naam }}: {{ $vak->beschrijving }}</li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
</body>
</html>