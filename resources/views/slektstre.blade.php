<link rel="stylesheet" type="text/css" href="{{ asset('css/slekt.css') }}" />
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Slektstre</title>
    <link rel="stylesheet" href="{{ asset('css/slekt.css') }}" />
  </head>
  <body>
    <div class="tree">
      <ul>
        <li>
          <a href="#">Parent</a>
          <ul>
            <li>
              <a href="#">Child</a>
              <ul>
                <li>
                  <a href="#">Grand Child</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#">Child</a>
              <ul>
                <li>
                  <a href="#">Grand Child</a>
                </li>
                <li>
                  <a href="#">Grand Child</a>
                  <ul>
                    <li>
                      <a href="#">Great Grand Child</a>
                    </li>
                    <li>
                      <a href="#">Great Grand Child</a>
                    </li>
                    <li>
                      <a href="#">Great Grand Child</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#">Grand Child</a>
                </li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </body>
</html>
