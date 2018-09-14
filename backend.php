<?php

if ($_GET['pass'] != "pass") {
    header('Location: ./?p=login');
}
?>



<div class="container d-flex justify-content-around">

  <!--button class="btn btn-secondary mt-5" onclick="newLearn();">新增學程式文章</button>
    <button class="btn btn-secondary mt-5" onclick="newTrain();">新增練題目文章</button>
    <button class="btn btn-secondary mt-5" onclick="newTeach();">新增實用教學文章</button-->

  <!--hr-->
  <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#learnModal">新增學程式文章</button>
  <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#trainModal">新增練題目文章</button>
  <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#teachModal">新增實用教學文章</button>

  <div class="modal fade" id="learnModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">1</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="./newArticle/learn.php" method="post">
            <div class="form-group">
              <label for="learn-title" class="col-form-label">title</label>
              <input type="text" class="form-control" name="learn-title" id="learn-title">
            </div>
            <div class="form-group">
              <label for="learn-article" class="col-form-label">article</label>
              <textarea class="form-control" name="learn-article" id="learn-article"></textarea>
            </div>
            <div class="form-group">
              <label for="learn-link" class="col-form-label">link</label>
              <textarea class="form-control" name="learn-link" id="learn-link"></textarea>
            </div>

            <div class="row w-75 mx-auto">
              <div class="form-check col">
                <input class="form-check-input" type="checkbox" value="true" name="learn-c" id="learn-c">
                <label class="form-check-label" for="learn-c">
                  C
                </label>
              </div>
              <div class="form-check col">
                <input class="form-check-input" type="checkbox" value="true" name="learn-c++" id="learn-c++">
                <label class="form-check-label" for="learn-c++">
                  C++
                </label>
              </div>
              <div class="form-check col">
                <input class="form-check-input" type="checkbox" value="true" name="learn-c#" id="learn-c#">
                <label class="form-check-label" for="learn-c#">
                  C#
                </label>
              </div>
            </div>

            <div class="row w-75 mx-auto">
              <div class="form-check col">
                <input class="form-check-input" type="checkbox" value="true" name="learn-java" id="learn-java">
                <label class="form-check-label" for="learn-java">
                  java
                </label>
              </div>
              <div class="form-check col">
                <input class="form-check-input" type="checkbox" value="true" name="learn-python" id="learn-python">
                <label class="form-check-label" for="learn-python">
                  python
                </label>
              </div>
              <div class="form-check col">
                <input class="form-check-input" type="checkbox" value="true" name="learn-html" id="learn-html">
                <label class="form-check-label" for="learn-html">
                  html
                </label>
              </div>
            </div>

            <div class="row w-75 mx-auto">
              <div class="form-check col">
                <input class="form-check-input" type="checkbox" value="true" name="learn-css" id="learn-css">
                <label class="form-check-label" for="learn-css">
                  css
                </label>
              </div>
              <div class="form-check col">
                <input class="form-check-input" type="checkbox" value="true" name="learn-javascript" id="learn-javascript">
                <label class="form-check-label" for="learn-javascript">
                  javascript
                </label>
              </div>
              <div class="form-check col">
                <input class="form-check-input" type="checkbox" value="true" name="learn-php" id="learn-php">
                <label class="form-check-label" for="learn-php">
                  php
                </label>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>

      </div>
    </div>
  </div>

  <div class="modal fade" id="trainModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">2</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="./newArticle/train.php" method="post">
            <div class="form-group">
              <label for="learn-title" class="col-form-label">title</label>
              <input type="text" class="form-control" name="learn-title" id="learn-title">
            </div>
            <div class="form-group">
              <label for="learn-article" class="col-form-label">article</label>
              <textarea class="form-control" name="learn-article" id="learn-article"></textarea>
            </div>
            <div class="form-group">
              <label for="learn-link" class="col-form-label">link</label>
              <textarea class="form-control" name="learn-link" id="learn-link"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="teachModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">3</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="./newArticle/teach.php" method="post">
          <div class="form-group">
              <label for="learn-title" class="col-form-label">title</label>
              <input type="text" class="form-control" name="learn-title" id="learn-title">
            </div>
            <div class="form-group">
              <label for="learn-article" class="col-form-label">article</label>
              <textarea class="form-control" name="learn-article" id="learn-article"></textarea>
            </div>
            <div class="form-group">
              <label for="learn-link" class="col-form-label">link</label>
              <textarea class="form-control" name="learn-link" id="learn-link"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <hr>
</div>
