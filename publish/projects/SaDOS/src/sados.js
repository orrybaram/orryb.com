(function (window, undefined) {

  /** 
   * This object stores a key requirement. We only need it because
   * this way we can check the instanceOf the requirement and handle
   * it appropriately.
   */

  var SaDOS_Key = function (code) {
    this.code = code;
  };

  /**
   * This is her, SaDOS.
   */

  var SaDOS = function (input, steps, print_callback) {
    var self  = this,
        step  = 0,
        user_input = [],
        arrow_press_count = 0,
        SaDOS_prefix = 'orryb.com: ',
        user = "",
        user_prefix = '$ ',
        welcome           = "Welcome to orryb.com!",
        $input_prefix = document.getElementById("user_prefix");

    var commands = {
      ssh: 'haha noway!',
      boobs: 'hooray for boobs',
      ls: '\nroot     porn      dev',
      cd: 'permission denied',
      sudo: 'Password...',
      alert: function() { alert('you\'re cool')},
      // 'su ': function(){
      //   user = prompt('Whats your name?');
      //   user_prefix = user + "@orryb.com:~$ "
      //   input_prefix = user_prefix;
      // }
    };

    /**
     * This happens whenever a requirement is met, i.e. she can move
     * on to the next step. If there is no next step, she does
     * nothing.
     */

    this.step = function () {
      console.log(typeof steps[step].pause);
      if (typeof steps[step + 1] !== "undefined") {
        step += 1;
        if(typeof steps[step].pause === "number") {
          setTimeout(self.print(steps[step].msg), steps[step].pause);
          console.log('pause');
        } else {
          self.print(steps[step].msg);
          console.log('dont pause');
        }
      }
    };

    /**
     * This is invoked whenever SaDOS has anything to say. It calls
     * the provided callback.
     */

    this.print = function (text, option) {
      if (option === 'user') {
        text = user_prefix + text;
        print_callback.apply(null, [text]);
      } else if (option === 'nosplit') {
        text = SaDOS_prefix + text;
        print_callback.apply(null, [text]);
      } else if (option === 'system'){
         print_callback.apply(null, [text]);
      } else {
        text = text.split('\n');
        msg = [];
        for (var i = 0; i < text.length - 1; i++) {
          msg +=  SaDOS_prefix + text[i] + '\n';
        }
        msg +=  SaDOS_prefix + text[text.length - 1]
        print_callback.apply(null, [msg]);
      }
    };

    /**
     * This starts the baby up.
     */

    this.start = function () {
      $input_prefix.innerHTML = user_prefix;
      self.print(welcome, 'system');
      self.listen('su ');
      self.print(steps[step].msg);
    };

    this.reset = function() {
      input.value = "";
      arrow_press_count = 0;
    };

    /**
     * This is invoked through e.g. an event listener on the input
     * element and provided with user input data. What key they
     * pressed and what the value of the user input was.
     *
     * It checks if the requirements for the current step are met, and
     * and if that is so, moves on.
     */

    this.check = function (code, val) {
      var req = steps[step].req;

      if (code === 13) { //enter
        if (val.length !== undefined) {
          self.print(val, 'user');
          user_input.push(val);
          self.reset();
          self.listen(val);
          steps[step].input = val;
          if (steps[step].callback) {
            callback = steps[step].callback;
            callback();
          }
        }

        if (req instanceof SaDOS_Key) {
          if (code === req.code) {
            self.step();
          }
        } else if (req instanceof RegExp) {
          if (val.search(req) !== -1) {

            self.step();
          }
        } else {
          if (req === val) {
            self.step();

          }
        }
      } else if (code === 38) { //up arrow
        arrow_press_count++;
        var latest_input = user_input[user_input.length - arrow_press_count];

        if (latest_input !== undefined) {
          if (latest_input === input.value) {
            input.value = latest_input;
          }
          else {
            input.value = latest_input;
          }
        }
      
      } else if (code === 40) { //down arrow
        arrow_press_count--;
        
        var latest_input = user_input[user_input.length - arrow_press_count];
        
        if (latest_input !== undefined) {
          if (latest_input === input.value) {
            input.value = latest_input;
          }
          else {
            input.value = latest_input;
          }
        }
      
      } else if (code === 8) { //backspace 
         if (input.value === '') {
           arrow_press_count = 0;
         }
      }
    };
    
    this.listen = function(val) {
      for (command in commands) {
        var msg = commands[command];
        if (val.match(command)) {
          if (typeof msg === 'string') {
            self.print(msg, 'nosplit');
          } else if (typeof msg === 'function') {
            var command = commands[command];
            command();
          } 
          return false;
        } 
      }
  }



  };

  /**
   * Fuck yeah export
   */
   
  window.SaDOS     = SaDOS;
  window.SaDOS_Key = SaDOS_Key;
}(window));