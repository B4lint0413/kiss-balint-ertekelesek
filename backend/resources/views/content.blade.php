<html>

<body>
    <h1>Tanulók adatai</h1>
    <ul>
        @foreach($students as $student)
        <li>
            <ul>
                <li>Név: {{$student->name}}</li>
                <li>Osztály: {{$student->class}}</li>
                <li>Születési dátum: {{$student->birth}}</li>
                <li>Oszályzatok:
                    <ul>
                        @foreach($student->grades as $grade)
                        <li>
                            <ul>
                                <li>Oszályzat: {{$grade->grade}}</li>
                                <li>Témakör: {{$grade->topic}}</li>
                                <li>Típusa: {{$grade->type}}</li>
                                <li>Súlyozás: {{$grade->weight}}</li>
                                <li>Tantárgy:
                                    <ul>
                                        <li>Neve: {{$grade->subject->name}}</li>
                                        <li>Tanár: {{$grade->subject->teacher}}</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </li>
        @endforeach
    </ul>
</body>

</html>