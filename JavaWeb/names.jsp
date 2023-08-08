<!DOCTYPE html>
<html>
<head>
    <title>Colleauges Names</title>
</head>
<body>

    <ul>
        <c:forEach items="${names}" var="Names">
            <li>${employee.number} by ${employee.names}</li>
        </c:forEach>
    </ul>
</body>
</html>
