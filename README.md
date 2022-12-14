## Openforests API Coding Challenge

Clone this repository. It is a fresh [Apiato](https://apiato.io/docs/) install with 4 entities:

- users
- posts
- categories
- comments

You can find their migrations in their respective Containers (eg. app/AppSection/Containers/User/Data/Migrations) and also their relations in the dataschema.png file. 

Make this project run locally on your machine ([Installation](https://apiato.io/docs/getting-started/installation)).
Compile the [docs](https://apiato.io/docs/additional-features/documentation) and have a look at the three endpoints documented there:
- Post -> Create Post
- Comment -> Create Comment
- Post -> Get all Comments for specific Post

Create a repository in your GitHub account.

Implement these API endpoints and push your solutions to your repository. Then give [@yalsicor](https://github.com/yalsicor) access to your repository so your solution can be checked.

**Hints for implementation**

Create the following classes for each endpoint (generator commands help a lot):
- Model (with relations)
- Repository
- Request
- Controller
- Action
- Task
- Transformer

### Optional Task
- cover the endpoints with automated [tests](http://apiato.io/docs/optional-components/tests/)



## Apiato Documentation

**Apiato** is built using the new architectural pattern **[Porto](https://github.com/Mahmoudz/Porto)**.

Find the Apiato documentation **[here]((https://apiato.io/docs/))** and their repository **[here](https://github.com/apiato/apiato)**.

<br>

<p align="center">
	<a href="http://apiato.io/docs/">
	   <img src="https://github.com/apiato/documentation/blob/master/images/documentation-button.png" width=350px" alt="Apiato Docs"/>
	</a>
</p>

---

<p align="center">Join apiato's Discord server, by clicking on the icon below.</p>


<p align="center">
	<a href="https://discord.gg/ryPcV4KM5k">
        <img src="https://github.com/apiato/documentation/blob/master/images/discord-apiato-icon.png" width=100px" alt="Apiato Discord"/>
	</a>
</p>
