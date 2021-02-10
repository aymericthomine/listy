<div class="app">
  <h1>Some headline</h1>
  
  <ul class="hs full">
    <li class="item">test</li>
    <li class="item">test</li>
    <li class="item">test</li>
    <li class="item">test</li>
    <li class="item">test</li>
    <li class="item">test</li>
  </ul>
  
  <div class="container">
    <div class="item">
      <h3>Block for context</h3>
    </div>
  </div>
</div>

<style>
HTML CSSResult Skip Results Iframe
EDIT ON
:root {
  --gutter: 20px;
}

.app {
  padding: var(--gutter) 0;
  display: grid;
  grid-gap: var(--gutter) 0;
  grid-template-columns: var(--gutter) 1fr var(--gutter);
  align-content: start;
}

.app > * {
  grid-column: 2 / -2;
}

.app > .full {
  grid-column: 1 / -1;
}

.hs {
  display: grid;
  grid-gap: calc(var(--gutter) / 2);
  grid-template-columns: repeat(6, calc(50% - var(--gutter) * 2));
  grid-template-rows: minmax(150px, 1fr);
  padding: 0 20px;
  
  overflow-x: scroll;
  scroll-snap-type: x proximity;
  padding-bottom: calc(.75 * var(--gutter));
  margin-bottom: calc(-.25 * var(--gutter));
}

.hs > li:last-child {
  margin-right: 20px;
}


/* Demo styles */

html,
body {
  height: 100%;
}

body {
  display: grid;
  place-items: center;
  background: #456173;
}

ul {
  list-style: none;
  padding: 0;
}

h1,
h2,
h3 {
  margin: 0;
}

.app {
  width: 375px;
  height: 667px;
  background: #DBD0BC;
  overflow-y: scroll;
}

.hs > li,
.item {
  scroll-snap-align: center;
  padding: calc(var(--gutter) / 2 * 1.5);
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  background: #fff;
  border-radius: 8px;
}
</style>