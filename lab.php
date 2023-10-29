<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/x-icon" href="ico.png">
    <title>1 лаба</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <table width="100%" cellspacing="0" cellpadding="5" class="standartContainer">
        <thead>
            <tr>
                <div class="whiteContainer">
                    Лабораторная по веб-программированию №1
                    <br>
                    Выполнила Сафонова Ольга P3207
                </div>
            </tr>
        </thead>

        <tbody>
            <form id="submitForm" method="POST" onsubmit="return false">
                <tr>
                    <td>
                        X:
                        <br>
                        <button type="button" value="-2" onclick="setValueX(-2)">-2</button>
                        <button type="button" value="-1.5" onclick="setValueX(-1.5)">-1.5</button>
                        <button type="button" value="-1" onclick="setValueX(-1)">-1</button>
                        <button type="button" value="-0.5" onclick="setValueX(-0.5)">-0.5</button>
                        <button type="button" value="0" onclick="setValueX(0)">0</button>
                        <button type="button" value="0.5" onclick="setValueX(0.5)">0.5</button>
                        <button type="button" value="1" onclick="setValueX(1)">1</button>
                        <button type="button" value="1.5" onclick="setValueX(1.5)">1.5</button>
                        <button type="button" value="2" onclick="setValueX(2)">2</button>
                        <input type="hidden" id="selectedValueX" name="inputX" value="">
                        <div id="xValue" class="tempMsg"></div>
                        <div id="xWarning" class="tempMsg"></div>
                    </td>
                    <td rowspan="4">

                        <svg height="300" width="300" xmlns="http://www.w3.org/2000/svg">

                            <polygon fill="#D8D9DA" stroke="#D8D9DA" points="150,100 150,150 250,150 250,100"></polygon>
                            <polygon fill="#D8D9DA" stroke="#D8D9DA" points="150,150 50,150 150,100"></polygon>
                            <path fill="#D8D9DA" stroke="#D8D9DA" d="M 50 150 C 50 250, 150 250, 150 250 L 150 150 Z"></path>

                            <line stroke="#272829" x1="0" x2="300" y1="150" y2="150"></line>
                            <line stroke="#272829" x1="150" x2="150" y1="0" y2="300"></line>
                            <polygon fill="#272829" stroke="#272829" points="150,0 144,15 156,15"></polygon>
                            <polygon fill="#272829" stroke="#272829" points="300,150 285,156 285,144"></polygon>

                            <line stroke="#272829" x1="200" x2="200" y1="155" y2="145"></line>
                            <line stroke="#272829" x1="250" x2="250" y1="155" y2="145"></line>
                            <line stroke="#272829" x1="50" x2="50" y1="155" y2="145"></line>
                            <line stroke="#272829" x1="100" x2="100" y1="155" y2="145"></line>
                            <line stroke="#272829" x1="145" x2="155" y1="100" y2="100"></line>
                            <line stroke="#272829" x1="145" x2="155" y1="50" y2="50"></line>
                            <line stroke="#272829" x1="145" x2="155" y1="200" y2="200"></line>
                            <line stroke="#272829" x1="145" x2="155" y1="250" y2="250"></line>

                            <text fill="#272829" x="195" y="140">R/2</text>
                            <text fill="#272829" x="250" y="140">R</text>
                            <text fill="#272829" x="40" y="140">-R</text>
                            <text fill="#272829" x="85" y="140">-R/2</text>
                            <text fill="#272829" x="160" y="55">R</text>
                            <text fill="#272829" x="160" y="105">R/2</text>
                            <text fill="#272829" x="160" y="204">-R/2</text>
                            <text fill="#272829" x="160" y="255">-R</text>
                            <text fill="#272829" x="285" y="140">x</text>
                            <text fill="#272829" x="160" y="15">y</text>


                        </svg>

                    </td>
                </tr>
                <tr>
                    <td>
                        Y:
                        <br>
                        <input id="selectedValueY" type="text" name="inputY" placeholder="from -5 to 5">
                        <div id="yWarning" class="tempMsg"></div>
                    </td>
                </tr>
                <tr>
                    <td class="inputR">
                        R:
                        <br>
                        <input name="inputR" type="radio" id="1" value="1" onclick=setValueR(1) checked>
                        <label for="1">1</label>
                        <input name="inputR" type="radio" id="1.5" value="1.5" onclick=setValueR(1.5)>
                        <label for="1.5">1.5</label>
                        <input name="inputR" type="radio" id="2" value="2" onclick=setValueR(2)>
                        <label for="2">2</label>
                        <input name="inputR" type="radio" id="2.5" value="2.5" onclick=setValueR(2.5)>
                        <label for="2.5">2.5</label>
                        <input name="inputR" type="radio" id="3" value="3" onclick=setValueR(3)>
                        <label for="3">3</label>
                        <input type="hidden" id="selectedValueR" value="1">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Submit" id="submitButton" class="submitButton">
                        <button type="button" id="clearButton" onclick="removeData()">Clear table</button>
                    </td>
                </tr>
                <tr>
                    <table id="checkTable" class="whiteContainer">
                        <tr>
                            <th scope="col">X</th>
                            <th scope="col">Y</th>
                            <th scope="col">R</th>
                            <th scope="col">Current time</th>
                            <th scope="col">Script time</th>
                            <th scope="col">Result</th>
                        </tr>
                    </table>
                </tr>
            </form>
        </tbody>
    </table>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script type="text/javascript" src="validate.js"></script>
    <script type="text/javascript" src="setValue.js"></script>
    <script type="text/javascript" src="createTableLine.js"></script>
    <script type="text/javascript" src="removeData.js"></script>
    <script type="text/javascript" src="startScript.js"></script>
    <script type="text/javascript" src="getResponse.js"></script>
    <script type="text/javascript" src="subStr.js"></script>
</body>

</html>