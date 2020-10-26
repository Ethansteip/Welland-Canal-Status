<?PHP
    if ($json['bridges'][0]['status']['status'] === "Available") {
        return "available";
    } elseif ($json['bridges'][0]['status']['status'] === "raisingsoon") {
        return "raisingsoon";
    } elseif ($json['bridges'][0]['status']['status'] === "--Work in Progress--
    ") {
        return "wip";
    } else {
        return "fullyraised";
    };
?>