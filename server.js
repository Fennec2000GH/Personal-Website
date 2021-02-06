
const express = require("express");
const app = express();
const port = process.env.PORT || 5000;

// app.use(__dirname + "/public");

app.get("/", function (req, res) {
	res.status(200).send("HOME PAGE");
});

app.listen(5000, function () { console.log("App is now listening."); });
