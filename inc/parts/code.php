<div class="containerSection codeContainer scrolling">
  <span class="ion-ios-close-empty"></span>
  <div class="preview flex flex-v-center">
    <p>Code examples appear here.</p>
  </div>


<div class="codeIndiv border-fade-in">
  <h2>CSS</h2>
  <pre>
    <code class="language-css">
// Border fade in
.border-fade-in {
  padding: 10px 20px;
  background: #66BF7A;
  color: #fff;
  display: inline-block;
  position: relative;
  -moz-box-shadow: inset 0 0 0 4px transparent, 0 0 1px transparent;
  -webkit-box-shadow: inset 0 0 0 4px transparent, 0 0 1px transparent;
  box-shadow: inset 0 0 0 4px transparent, 0 0 1px transparent;
  -moz-transition: 0.25s;
  -o-transition: 0.25s;
  -webkit-transition: 0.25s;
  transition: 0.25s;
}
.border-fade-in:hover {
  -moz-box-shadow: inset 0 0 0 4px #162426, 0 0 1px transparent;
  -webkit-box-shadow: inset 0 0 0 4px #162426, 0 0 1px transparent;
  box-shadow: inset 0 0 0 4px #162426, 0 0 1px transparent;
}
    </code>
  </pre>

</div>


<div class="codeIndiv border-slide-in">
  <h2>CSS</h2>
  <pre>
    <code class="language-css">
// Border slide in
.border-fade-in {
  padding: 10px 20px;
  background: #66BF7A;
  color: #fff;
  display: inline-block;
  position: relative;
  -moz-box-shadow: inset 0 0 0 0px #162426, 0 0 0px #162426;
  -webkit-box-shadow: inset 0 0 0 0px #162426, 0 0 0px #162426;
  box-shadow: inset 0 0 0 0px #162426, 0 0 0px #162426;
  -moz-transition: 0.25s;
  -o-transition: 0.25s;
  -webkit-transition: 0.25s;
  transition: 0.25s;
}
.border-fade-in:hover {
  -moz-box-shadow: inset 0 0 0 4px #162426, 0 0 1px transparent;
  -webkit-box-shadow: inset 0 0 0 4px #162426, 0 0 1px transparent;
  box-shadow: inset 0 0 0 4px #162426, 0 0 1px transparent;
}
    </code>
  </pre>

</div>


<div class="codeIndiv hollow-out">
  <h2>CSS</h2>
  <pre>
    <code class="language-css">
// Hollow out
.hollow-out {
  padding: 10px 20px;
  background: #66BF7A;
  color: #fff;
  display: inline-block;
  position: relative;
  -moz-box-shadow: inset 0 0 0 4px #66BF7A, 0 0 1px transparent;
  -webkit-box-shadow: inset 0 0 0 4px #66BF7A, 0 0 1px transparent;
  box-shadow: inset 0 0 0 4px #66BF7A, 0 0 1px transparent;
  -moz-transition: 0.25s;
  -o-transition: 0.25s;
  -webkit-transition: 0.25s;
  transition: 0.25s;
}
.hollow-out:hover {
  background: none;
  color: #66BF7A;
}
    </code>
  </pre>

</div>


  <div class="codeIndiv border-top-l-r">
    <h2>CSS</h2>
    <pre>
      <code class="language-css">
// Border top left to right
.border-top-l-r {
  padding: 10px 20px;
  background: #66BF7A;
  color: #fff;
  display: inline-block;
  border: 0px solid #000;
  position: relative;
  -moz-transition: 0.25s;
  -o-transition: 0.25s;
  -webkit-transition: 0.25s;
  transition: 0.25s;
  z-index: 2;
}
.border-top-l-r:before {
  content: "";
  position: absolute;
  width: 0;
  left: 0;
  top: 0;
  -moz-transition: 0.25s;
  -o-transition: 0.25s;
  -webkit-transition: 0.25s;
  transition: 0.25s;
  height: 3px;
  background-color: #162426;
}
.border-top-l-r:hover:before {
  width: 100%;
}
      </code>
    </pre>

  </div>
  <div class="codeIndiv border-top-r-l">
    <h2>CSS</h2>
    <pre>
      <code class="language-css">
// Border top right to left
.border-top-l-r {
  padding: 10px 20px;
  background: #66BF7A;
  color: #fff;
  display: inline-block;
  border: 0px solid #000;
  position: relative;
  -moz-transition: 0.25s;
  -o-transition: 0.25s;
  -webkit-transition: 0.25s;
  transition: 0.25s;
  z-index: 2;
}
.border-top-l-r:before {
  content: "";
  position: absolute;
  width: 0;
  right: 0;
  top: 0;
  -moz-transition: 0.25s;
  -o-transition: 0.25s;
  -webkit-transition: 0.25s;
  transition: 0.25s;
  height: 3px;
  background-color: #162426;
}
.border-top-l-r:hover:before {
  width: 100%;
}
      </code>
    </pre>

  </div>

  <div class="codeIndiv border-bottom-l-r">
    <h2>CSS</h2>
    <pre>
      <code class="language-css">
// Border bottom left to right
  .border-bottom-l-r {
  padding: 10px 20px;
  background: #66BF7A;
  color: #fff;
  display: inline-block;
  border: 0px solid #000;
  position: relative;
  -moz-transition: 0.25s;
  -o-transition: 0.25s;
  -webkit-transition: 0.25s;
  transition: 0.25s;
  z-index: 2;
}
.border-bottom-l-r:before {
  content: "";
  position: absolute;
  width: 0;
  left: 0;
  bottom: 0;
  -moz-transition: 0.25s;
  -o-transition: 0.25s;
  -webkit-transition: 0.25s;
  transition: 0.25s;
  height: 3px;
  background-color: #162426;
}
.border-bottom-l-r:hover:before {
  width: 100%;
}
      </code>
    </pre>

  </div>

  <div class="codeIndiv border-bottom-r-l">
    <h2>CSS</h2>
    <pre>
      <code class="language-css">
// Border bottom right to left
.border-bottom-r-l {
  padding: 10px 20px;
  background: #66BF7A;
  color: #fff;
  display: inline-block;
  border: 0px solid #000;
  position: relative;
  -moz-transition: 0.25s;
  -o-transition: 0.25s;
  -webkit-transition: 0.25s;
  transition: 0.25s;
  z-index: 2;
}
.border-bottom-r-l:before {
  content: "";
  position: absolute;
  width: 0;
  right: 0;
  bottom: 0;
  -moz-transition: 0.25s;
  -o-transition: 0.25s;
  -webkit-transition: 0.25s;
  transition: 0.25s;
  height: 3px;
  background-color: #162426;
}
.border-bottom-r-l:hover:before {
  width: 100%;
}
      </code>
    </pre>

  </div>
  <div class="codeIndiv popout">
    <h2>CSS</h2>
    <pre>
      <code class="language-css">
// Popout right
.popout {
  padding: 10px 20px;
  background: #162426;
  color: #fff;
  display: inline-block;
  -moz-transition: 0.25s;
  -o-transition: 0.25s;
  -webkit-transition: 0.25s;
  transition: 0.25s;
  -moz-box-shadow: 0px 0px 0px #66BF7A;
  -webkit-box-shadow: 0px 0px 0px #66BF7A;
  box-shadow: 0px 0px 0px #66BF7A;
  z-index: 2;
  position: relative;
}
.popout:after {
  z-index: -1;
  content: "\f489";
  position: absolute;
  color: #FFF;
  width: 0;
  overflow: hidden;
  right: 0;
  height: 100%;
  bottom: 0;
  display: -webkit-flex;
  display: flex;
  -webkit-justify-content: center;
  justify-content: center;
  -webkit-align-items: center;
  align-items: center;
  // Ionicons font loading
  font-family: "Ionicons";
  speak: none;
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  text-transform: none;
  text-rendering: auto;
  line-height: 1;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  -moz-transition: 0.25s;
  -o-transition: 0.25s;
  -webkit-transition: 0.25s;
  transition: 0.25s;
}
// On hover
.popout:hover {
  -moz-box-shadow: 20px 0px 0px #66BF7A;
  -webkit-box-shadow: 20px 0px 0px #66BF7A;
  box-shadow: 20px 0px 0px #66BF7A;
}
.animationList .popout:hover:after {
  right: -20px;
  width: 20px;
}
      </code>
    </pre>
</div>
    <div class="codeIndiv text-to-icon">
      <h2>CSS</h2>
      <pre>
        <code class="language-css">
// Text to icon
.text-to-icon {
  padding: 10px 20px;
  background: #162426;
  color: #fff;
  display: inline-block;
  -moz-transition: 0.25s;
  -o-transition: 0.25s;
  -webkit-transition: 0.25s;
  transition: 0.25s;
  -moz-box-shadow: 0px 0px 0px #66BF7A;
  -webkit-box-shadow: 0px 0px 0px #66BF7A;
  box-shadow: 0px 0px 0px #66BF7A;
  z-index: 2;
  position: relative;
}
.text-to-icon:after {
  z-index: -1;
  content: "\f489";
  position: absolute;
  color: #FFF;
  width: 100%;
  overflow: hidden;
  right: 0;
  height: 100%;
  bottom: 0;
  text-align: center;
  display: -webkit-flex;
  display: flex;
  -webkit-justify-content: center;
  justify-content: center;
  -webkit-align-items: center;
  align-items: center;
  font-family: "Ionicons";
  speak: none;
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  text-transform: none;
  text-rendering: auto;
  font-size: 20pt;
  line-height: 1;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  -moz-transition: 0.25s;
  -o-transition: 0.25s;
  -webkit-transition: 0.25s;
  transition: 0.25s;
  opacity: 0;
}
.text-to-icon:hover {
  color: transparent;
}
.text-to-icon:hover:after {
  opacity: 1;
}
  </code>
</pre>
  </div>

  <div class="codeIndiv icon-spin">
    <h2>CSS</h2>
    <pre>
      <code class="language-css">
// Icon spin
.icon-spin {
  padding: 10px 20px;
  background: #66BF7A;
  color: #fff;
  width: 131px;
  display: inline-block;
  -moz-transition: 0.25s;
  -o-transition: 0.25s;
  -webkit-transition: 0.25s;
  transition: 0.25s;
  z-index: 2;
  position: relative;
}
.icon-spin:after {
  z-index: -1;
  content: "\f489";
  position: absolute;
  width: 100%;
  overflow: hidden;
  right: 0;
  height: 100%;
  bottom: 0;
  text-align: center;
  display: -webkit-flex;
  display: flex;
  -webkit-justify-content: center;
  justify-content: center;
  -webkit-align-items: center;
  align-items: center;
  font-family: "Ionicons";
  speak: none;
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  text-transform: none;
  text-rendering: auto;
  font-size: 20pt;
  line-height: 1;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  -moz-transition: 0.25s;
  -o-transition: 0.25s;
  -webkit-transition: 0.25s;
  transition: 0.25s;
  -moz-transform: rotate(0deg);
  -ms-transform: rotate(0deg);
  -webkit-transform: rotate(0deg);
  transform: rotate(0deg);
  opacity: 1;
}
.icon-spin:hover:after {
  -moz-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  -webkit-transform: rotate(180deg);
  transform: rotate(180deg);
}
</code>
</pre>
</div>
</div>
