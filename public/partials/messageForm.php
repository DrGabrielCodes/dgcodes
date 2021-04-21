<form id="message-form" action="/formhandlers/messageFormHandler.php" method="POST">
            <!-- action="./formhandlers/messageFormHandler.php" method="POST"-->
            
            <p class="form-item">Wish to start a conversation or inquire about a   service? Or have a business or project to discuss? Please
                leave a message below. </p>
            <label for="name"> Name
                <input type="text" class="name form-item" id="name" name="name" placeholder="Enter your name" />
            </label>
            <label for="email"> Email
                <input type="email" class="email form-item" name="email" placeholder="Enter your email" id="email" />
            </label>
            <label for="subject"> Subject
                <input type="text" class="subject form-item" name="subject" id="subject" placeholder="Enter your message subject" />
            </label>
            <label for="message"> Message
                <textarea rows="6" max-cols="30" class="message form-item" name="message" id="message" placeholder="Type your message"> </textarea></label>
            </label>
            <label class="form-label" for="submit">
                <button type="submit" id="submit-btn" class="button submit-btn" name="submit">Send Message</button>
            </label>
            <div id="alert-msg"></div>

        </form>