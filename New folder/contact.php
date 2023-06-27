<!-- <section class="section section-contact section--hidden">
    <div class="container">
      <h2 class="common-heading">contact us</h2>
    </div>

    <div class="section-contact-main container">
      <form action="https://formspree.io/f/xnqwzoro" method="POST">
        <div class="grid grid-two-col">
          <input
            type="text"
            name="username"
            id=""
            required
            placeholder="Name"
          />
          <input
            type="email"
            name="email"
            required
            placeholder="Email"
            autocomplete="false"
          />
        </div>
        <div>
          <input type="text" name="subject" placeholder="Subject" />
        </div>
        <div>
          <textarea name="message" id="" placeholder="Message"></textarea>
        </div>

        <div>
          <input type="submit" value="send message" class="btn" />
        </div>
      </form>
    </div>
  </section>
   -->
   <html>
    <head>
        <title>Contact us</title>
        <link rel="stylesheet" href="con.css">
    </head>
    <body>
        <div class="container">
            <form action="https://formspree.io/f/myyaqgal"
            method="POST">
          
              <!-- <label for="fname">First Name</label>
              <input type="text" id="fname" name="firstname" placeholder="Your name..">
          
              <label for="lname">Last Name</label>
              <input type="text" id="lname" name="lastname" placeholder="Your last name.."> -->
              <label for="fname">Name</label>
              <input
              type="text"
              name="username"
              id="fname"
              required
              placeholder="Name"
              autocomplete="off"
             />
             <label for="email">Email </label>
             <input
            type="email"
            name="email"
            id="email"
            required
            placeholder="Email"
            autocomplete="off"
          />
          
              <!-- <label for="country">Country</label>
              <select id="country" name="country" aria-placeholder="select country">
                <option>select country</option>
                <option>India</option>
                <option>Canada</option>
                <option>USA</option>
                
              </select>
           -->
              <label for="subject">Subject</label>
              <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" required autocomplete="off"></textarea>
          
              <input type="submit" value="Submit">
          
            </form>
          </div>
    </body>
   </html>